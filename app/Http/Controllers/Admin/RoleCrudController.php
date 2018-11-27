<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\RoleRequest as StoreRequest;
use App\Http\Requests\RoleRequest as UpdateRequest;
use Spatie\Permission\PermissionRegistrar;
use Auth;
use App\Authorizable;

class RoleCrudController extends CrudController
{
	use Authorizable;
	
    public function setup()
    {
        $role_model = 'App\Models\Role';
        $permission_model = "Backpack\PermissionManager\app\Models\Permission";

        $this->crud->setModel($role_model);
        $this->crud->setEntityNameStrings(trans('backpack::permissionmanager.role'), trans('backpack::permissionmanager.roles'));
        $this->crud->setRoute(config('backpack.base.route_prefix').'/role');
		
		$this->crud->allowAccess('revisions');
		$this->crud->with('revisionHistory');
		$this->crud->genero = "este";
		
		$this->crud->addButtonFromView( 'top', 'reload_permissions', 'recargar-permisos', 'end');
		
        $this->crud->setColumns([
            [
                'name'  => 'name',
                'label' => trans('backpack::permissionmanager.name'),
                'type'  => 'text',
            ],
            [
                // n-n relationship (with pivot table)
                'label'     => ucfirst(trans('backpack::permissionmanager.permission_plural')),
                'type'      => 'select_multiple',
                'name'      => 'permissions', // the method that defines the relationship in your Model
                'entity'    => 'permissions', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model'     => $permission_model, // foreign key model
                'pivot'     => true, // on create&update, do you need to add/delete pivot table entries?
            ],
        ]);

        $this->crud->addField([
            'name'  => 'name',
            'label' => trans('backpack::permissionmanager.name'),
            'type'  => 'text',
			'attributes' => [
				'placeholder' => 'Agregue el rol *',
			],
			'tab' => 'Datos generales',
        ]);
        $this->crud->addField([
            'label'     => ucfirst(trans('backpack::permissionmanager.permission_plural')),
            'type'      => 'checklist_rows',
            'name'      => 'permissions',
            'entity'    => 'permissions',
            'attribute' => 'name',
            'model'     => $permission_model,
            'pivot'     => true,
			'tab' => 'Permisos',
        ]);

        if (config('backpack.permissionmanager.allow_role_create') == false) {
            $this->crud->denyAccess('create');
        }
        if (config('backpack.permissionmanager.allow_role_update') == false) {
            $this->crud->denyAccess('update');
        }
        if (config('backpack.permissionmanager.allow_role_delete') == false) {
            $this->crud->denyAccess('delete');
        }
    }

    public function store(StoreRequest $request)
    {
        \Cache::forget('spatie.permission.cache');
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request)
    {
        \Cache::forget('spatie.permission.cache');
        return parent::updateCrud();
    }
}
