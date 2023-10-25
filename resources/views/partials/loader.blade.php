	<style type="text/css">
		.madiv{
			/*display:none;*/
			background: rgb(255,241,241);
			background: linear-gradient(72deg, rgba(255,241,241,1) 0%, rgba(29,51,101,0.5886729691876751) 0%, rgba(29,51,101,0.4598214285714286) 0%);
			position: fixed;
			margin: auto;
			bottom: 0;
			left: 0;
			right: 0;
			top: 0;
			z-index: 100000;
			align-items: center;
			justify-content: center;
		}
		.madiv2{
			border-radius: 5px;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 20vh;
			width: 20%;
			background: white;
		}
		.moncontain{
			display: flex;
			text-align: center;
			justify-content: center;
			align-items: center;
			min-height: 100%;
		}
		.monRow{
			color : #1d3365;
			display: flex;
			text-align: center;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			width: 100%;
			/* background:rgba(179, 176, 176, 0.301); */
		}
		.loader{
    position: relative;
    font-size: 20px;
    letter-spacing: 2px;
  }
  .loader:before {
    content: "Chargement";
    color: #182c37
  }
  .loader:after {
    content: "";
    width: 20px;
    height: 20px;
    background-color: #ff3d00;
    border-radius: 50%;
    position: absolute;
    inset: 0;
    margin: auto;
    top: -70px;
    animation: motion 3s ease-in-out infinite;
  }

  @keyframes motion {
    0%, 50%, 100% {
      transform: translateX(0) scale(1);
    }
    25% {
      transform: translateX(-100px) scale(0.3);
    }
    75% {
      transform: translateX(100px) scale(0.3);
    }
  }
    
  
      
		
	</style>

	<div class="madiv" id="madiv" >
		<div class="moncontain">
			{{-- <div class="row monRow"> --}}
				<div class="madiv2">
					{{-- <div class="col-sm-6 text-center"> --}}
						{{-- <p style="font-weight: bold; font-size:15px">Veuillez patienter</p> --}}
						<div class="loader mt-2"></div>
					{{-- </div> --}}
				</div>
			{{-- </div> --}}
		</div>
	</div>
