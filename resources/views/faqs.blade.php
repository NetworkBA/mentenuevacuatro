@extends('layouts.front')

@section('body')
<div class="container">
	<h2 style="text-align: center;">Bienvenido a nuestro portal de ayuda</h2>
	<br>
	<div class="row">
		<div class="col-lg-6">
			<div class="accordion" id="accordionExample">
				  <div class="card">
				  	<b style="padding:10px">¿Qué es y cómo fuciona Mente 4.0</b>
				    <div class="card-header" id="headingOne">
				      <h2 class="mb-0">
				        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#aa" aria-expanded="false" aria-controls="aa">
				          ¿Que es Mente 4.0?
				        </button>
				      </h2>
				    </div>

				    <div id="aa" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingTwo">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#ab" aria-expanded="false" aria-controls="ab">
				          ¿Cómo funciona?
				        </button>
				      </h2>
				    </div>
				    <div id="ab" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				      <div class="card-body">
				       		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#ac" aria-expanded="false" aria-controls="ac">
				          ¿Cómo agendar mi primera cita en Mente 4.0?
				        </button>
				      </h2>
				    </div>
				    <div id="ac" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#ad" aria-expanded="false" aria-controls="ad">
				          ¿Cómo tomar mi primera cita en Mente 4.0?
				        </button>
				      </h2>
				    </div>
				    <div id="ad" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#ae" aria-expanded="false" aria-controls="ae">
				          ¿Las consultas en línea son efectivas?
				        </button>
				      </h2>
				    </div>
				    <div id="ae" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#af" aria-expanded="false" aria-controls="af">
				          ¿Necesito descargar alguna App de videollamada?
				        </button>
				      </h2>
				    </div>
				    <div id="af" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua.
				      </div>
				    </div>
				  </div>

				</div>
		</div>
		<div class="col-lg-6">
			<div class="accordion" id="accordionExample">
				  <div class="card">
				  	<b style="padding:10px">Enfoques Terapeuticos </b>
				    <div class="card-header" id="headingOne">
				      <h2 class="mb-0">
				        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#ba" aria-expanded="false" aria-controls="ba">
				          Terapia Cognitivo - Conductual
				        </button>
				      </h2>
				    </div>

				    <div id="ba" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingTwo">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#bb" aria-expanded="false" aria-controls="bb">
				         	Terapia humanista
				        </button>
				      </h2>
				    </div>
				    <div id="bb" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				      <div class="card-body">
				       		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#bc" aria-expanded="false" aria-controls="bc">
				          Terapia Integrativa
				        </button>
				      </h2>
				    </div>
				    <div id="bc" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#bd" aria-expanded="false" aria-controls="bd">
				          Terapia Narrativa
				        </button>
				      </h2>
				    </div>
				    <div id="bd" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#be" aria-expanded="false" aria-controls="be">
				          Terapia Psicoanalitica
				        </button>
				      </h2>
				    </div>
				    <div id="be" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#bf" aria-expanded="false" aria-controls="bf">
				         	Terapia Sistémica
				        </button>
				      </h2>
				    </div>
				    <div id="bf" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua.
				      </div>
				    </div>
				  </div>

				</div>
		</div>
	</div>
	<br>
	<br>
	<div class="row">
		<div class="col-lg-6">
			<div class="accordion" id="accordionExample">
				  <div class="card">
				  	<b style="padding:10px">Formas de pago</b>
				    <div class="card-header" id="headingOne">
				      <h2 class="mb-0">
				        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#ca" aria-expanded="false" aria-controls="ca">
				          ¿Cuándo se realiza el pago de la cita?
				        </button>
				      </h2>
				    </div>

				    <div id="ca" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingTwo">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cb" aria-expanded="false" aria-controls="cb">
				          ¿Qué metodos de pago aceptan?
				        </button>
				      </h2>
				    </div>
				    <div id="cb" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				      <div class="card-body">
				       		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cc" aria-expanded="false" aria-controls="cc">
				          ¿Ofrecen la primer consulta gratis?
				        </button>
				      </h2>
				    </div>
				    <div id="cc" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua.
				      </div>
				    </div>
				  </div>
				  
				</div>
		</div>
		<div class="col-lg-6">
			<div class="accordion" id="accordionExample">
				  <div class="card">
				  	<b style="padding:10px">Sobre las sesiones</b>
				    <div class="card-header" id="headingOne">
				      <h2 class="mb-0">
				        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#da" aria-expanded="false" aria-controls="da">
				          ¿Cuánto dura una cita?
				        </button>
				      </h2>
				    </div>

				    <div id="da" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingTwo">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#db" aria-expanded="false" aria-controls="db">
				         	¿Cuáles son las politicas de cancelación?
				        </button>
				      </h2>
				    </div>
				    <div id="db" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				      <div class="card-body">
				       		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#dc" aria-expanded="false" aria-controls="dc">
				          ¿Cómo puedo cancelar o re agendar mi cita?
				        </button>
				      </h2>
				    </div>
				    <div id="dc" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua.
				      </div>
				    </div>
				  </div>

				</div>
		</div>
	</div>
	<br>
	<br>
	<div class="row">
		<div class="col-lg-6">
			<div class="accordion" id="accordionExample">
				  <div class="card">
				  	<b style="padding:10px">Soy psicologo</b>
				    <div class="card-header" id="headingOne">
				      <h2 class="mb-0">
				        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#ea" aria-expanded="false" aria-controls="ea">
				          ¿Cómo puedo unirme a Mente 4.0 como psicologo?
				        </button>
				      </h2>
				    </div>

				    <div id="ea" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingTwo">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#eb" aria-expanded="false" aria-controls="eb">
				          ¿Cuáles son los requisitos?
				        </button>
				      </h2>
				    </div>
				    <div id="eb" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				      <div class="card-body">
				       		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua.
				      </div>
				    </div>
				  </div>
				  
				</div>
		</div>
		<div class="col-lg-6">
			<div class="accordion" id="accordionExample">
				  <div class="card">
				  	<b style="padding:10px">Servicios para empresas</b>
				    <div class="card-header" id="headingOne">
				      <h2 class="mb-0">
				        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#fa" aria-expanded="false" aria-controls="fa">
				          ¿Tienen convenios corporativos?
				        </button>
				      </h2>
				    </div>

				    <div id="fa" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua.
				      </div>
				    </div>
				  </div>
				  

				</div>
		</div>
	</div>
</div>
@endsection