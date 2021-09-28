@extends('pagina-web.layouts.layout')

@section('title', '| Convenios')

@section('banner')
	<section class="xs-banner-inner-section parallax-window" style="background-image:url(/storage/uploads/{{$foto}})">
		<div class="xs-black-overlay"></div>
		<div class="container">
			<div class="color-white xs-inner-banner-content">
				<h2>{{$titulo}}</h2>
				<p>{{$contenido}}</p>
			</div>
		</div>
	</section>
@endsection

@section('convenios_section')
	<!-- Convenios Institucionale section -->
	<section class="waypoint-tigger xs-section-padding" id="junta">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12 pr-0 pl-0">
					<div class="xs-archive-content xs-asg">
						<div class="xs-heading">
								<h2 class="xs-line-title">Nuestros</h2>
								<h3 class="xs-title big-o" data-title="Convenios">Convenios Interinstitucionales</h3>
						</div>
						<div class="tbl-header">
							<table class="tbl">
								<thead>
									<tr>
										<th><div class="first"><h2>INSTITUCIÓN</h2></div></th>
										<th><div><h2>MODALIDAD</h2></div></th>
										<th><div class="last"><h2>ESTADO</h2></div></th>
									</tr>
								</thead>
							</table>
						</div>
						<div class="tbl-content">
							<table class="tbl">
								<tbody>
									<tr>
										<td>REMBLAH</td>
										<td>Convenio de Cooperación Técnica</td>
										<td>-</td>
									</tr>
									<tr>
										<td>Universidad Nacional de Agricultura.</td>
										<td>Convenio Marco de cooperación Interinstitucional.</td>
										<td>-</td>
									</tr>
									<tr>
										<td>Universidad Nacional de Agricultura. </td>
										<td>Convenio Específico para el intercambio de información y fortalecimiento de capacidad entre la UNA.</td>
										<td>Borrador</td>						
									</tr>
									<tr>
										<td>Unión Internacional para la Conservación de la Naturaleza  (UICN)</td>
										<td>Convenio de Cooperación Técnica </td>
										<td>Borrador</td>
									</tr>
									<tr>
										<td>Red Hondureña de reservas Naturales Privadas (REHNAP)</td>
										<td>Convenio de Cooperación Interinstitucional </td>
										<td>Prorrogable</td>
									</tr>
									<tr>
										<td>Red Comunitaria Turística de Honduras (RECOTURH), CREDIA –REHNAP </td>
										<td>Convenio de cooperación Interinstitucional </td>
										<td>Prorrogable</td>
									</tr>
									<tr>
										<td>Departamental de Educación de Atlántida </td>
										<td>Convenio de Cooperación Interinstitucional </td>
										<td>Prorrogable</td>
									</tr>
									<tr>
										<td>Dirección Distrital de Educación de La Ceiba </td>
										<td>Convenio de Cooperación Interinstitucional</td>
										<td>Prorrogable</td>
									</tr>
									<tr>
										<td>Andrews University</td>
										<td>Colaboración Académica y de Investigación</td>
										<td>Prorrogable automáticamente</td>
									</tr>
									<tr>
										<td>Instituto de la Propiedad</td>
										<td>Convenio de cooperación Institucional </td>
										<td>Renovado por Mutuo Acuerdo</td>
									</tr>
									<tr>
										<td>Comunidad Empresarial de Honduras </td>
										<td>Acuerdo de cooperación para promover, fomentar  e incrementar la competitividad y el desarrollo sostenible. </td>
										<td>-</td>
									</tr>
									<tr>
										<td>UNITEC</td>
										<td>Convenios de Intenciones</td>
										<td>Prorrogados por mutuo acuerdo.</td>
									</tr>
									<tr>
										<td>Falls Brook Centre</td>
										<td>Convenio de Cooperación Inter institucional </td>
										<td>Prorrogado por mutuo acuerdo.</td>
									</tr>
									<tr>
										<td>Asociación Healthy Reefs </td>
										<td>Acuerdo de Asociación </td>
										<td>-</td>
									</tr>
									<tr>
										<td>Instituto Hondureño  de Turismo / Secretaria de Estado en el Despacho de Obras Públicas, Transporte y Vivienda </td>
										<td>Convenio de Cooperación </td>
										<td>Prorrogado</td>
									</tr>
									<tr>
										<td>Programa Alianza Joven Regional</td>
										<td>Carta de Intenciones</td>
										<td>Prorrogado</td>
									</tr>
									<tr>
										<td>Centro Regional del Litoral Atlántico  (CURLA) </td>
										<td>Carta de Intenciones </td>
										<td>Prorrogado</td>
									</tr>
									<tr>
										<td>Fundación Islas de  La Bahía </td>
										<td>Convenio de Cooperación Inter institucional</td>
										<td>Prorrogado</td>
									</tr>
									<tr>
										<td>Marvin Corrales, productor audio visual. </td>
										<td>Carta de Intenciones</td>
										<td>Prorrogable</td>
									</tr>
									<tr>
										<td>Broader View ORG</td>
										<td>Convenio de Cooperación Inter institucional.</td>
										<td>Puede ser renovado</td>
									</tr>
									<tr>
										<td>Fundación VIDA</td>
										<td>Convenio de Cooperación Inter institucional</td>
										<td>Prorrogable</td>
									</tr>
									<tr>
										<td>ProParque</td>
										<td>Carta de Entendimiento</td>
										<td>Finalizado el proyecto</td>
									</tr>
									<tr>
										<td>Oficina Presidencial de Cambio Climático (CLIMA+)</td>
										<td>Convenio de Colaboración</td>
										<td>Prorrogable</td>
									</tr>
									<tr>
										<td>La Dirección Ejecutiva del Plan de Nación/ Secretaria de Despacho de la Presidencia de la Republica (SDP).</td>
										<td>Convenio de Cooperación Institucional</td>
										<td>Prorrogable</td>
									</tr>
									<tr>
										<td>Instituto Nacional de Conservación y Desarrollo Forestal, Áreas Protegidas y Vida Silvestre (ICF).</td>
										<td>Convenio de Cooperación Inter institucional</td>
										<td>Prorrogable</td>
									</tr>
									<tr>
										<td>Secretaria Energía, Recursos Naturales, Ambiente y Minas. (MiAmbiente).  A través del Fondo de Adaptación. </td>
										<td>Memorándum de entendimiento</td>
										<td>Prorrogable</td>
									</tr>
									<tr>
										<td>Secretaria de Estado  en el Despacho de Energía, Recursos Naturales, Ambiente y Minas. (MiAmbiente).  </td>
										<td>Convenio Interinstitucional Técnico – Financiero. </td>
										<td>Prorrogable</td>
									</tr>
									<tr>
										<td>Fundación Parque Nacional Nombre de Dios (FUPNAND)</td>
										<td>Carta de Entendimiento y de Cooperación Interinstitucional</td>
										<td>12 meses</td>
									</tr>
									<tr>
										<td>Asociación de Investigación para el Desarrollo Ecológico y Socioeconomico (ASIDE)</td>
										<td>Carta de Intenciones</td>
										<td>Sin vencimiento</td>
									</tr>
									<tr>
										<td>Fundacion Hondureña de Investigación Agrícola (FHIA)</td>
										<td>Carta de Entendimiento y de Cooperación Interinstitucional</td>
										<td>12 meses</td>
									</tr>
									<tr>
										<td>Instituto Nacional de Conservación y Desarrollo Forestal, Areas protegidas y Vida Silvestre (ICF)</td>
										<td>Convenio de Cooperación Interinstitucional</td>
										<td>2 años</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- Edn Convenios Institucionale section -->
@endsection