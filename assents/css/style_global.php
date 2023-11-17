<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
	@import url('https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css');
	@import url('https://cdn-uicons.flaticon.com/uicons-thin-straight/css/uicons-thin-straight.css');


	*{
		margin: 0;
		padding: 0;
		font-family: 'Poppins', sans-serif;
	}
	.bg-stack{
		background-color: #5182ED;
	}
	.bg-stack-grad{
		background-image: linear-gradient(to right, #7351ed, #6b66f1, #6878f2, #6a88f1, #7396ee, #7499ec, #769ceb, #789fe9, #6e98ea, #6491ec, #5a89ec, #5182ed);
	}
	.fluter{
		transform: translateY(0px);
		animation: float 3s ease-in-out infinite;
	}
	@keyframes float{
		0%{
			transform: translateY(0px);
		}
		50%{
			transform: translateY(-30px);
		}
		100%{
			transform: translateY(0px);
		}
	}
	.margin-login{
		margin-top: 15%;
	}
	.form-style{
		margin-top: 10px;
		margin-bottom: 10px;
		border: 0;
		background-color: #EAEAEA;
	}
	.btn-search{
		margin-top: 10px;
		margin-bottom: 10px;
		background-color: #4261EF;
		color: #fff;
	}
	.form-style:focus{
		background-color: #EAEAEA;
		border: 1px solid #4261EF;
		box-shadow: none;
	}
	.btn-style{
		background-color: #4261EF;
		color: #fff;
		min-width: 100%;
	}
	.card-login{
		max-width: 400px;
		border: 0;
		box-shadow: none;
	}
	.btn-on-categorias{
		border-radius: 0;
		background-color: #4261EF;
		color: white;
		padding: 15px;
		margin-top: 7px;
		margin-right: 15px;
	}
	.btn-off-categorias{
		border-radius: 0;
		background-color: #EAEAEA;
		color: black;
		padding: 15px;
		margin-top: 7px;
		margin-right: 15px;
	}
	.btn-add-categoria{
		margin-top: 10px;
		background-color: #EAEAEA;
		width: 100%;
	}
	.contas-recentes{
		color: #fff;
		border: 0;
		margin-top: 25px;
		margin-bottom: 5vh;
		background-color: #4261EF;
	}
	.card-contas{
		background-color: #4261EF;
		border: 0;
		margin-bottom: 2vh;
	}
	.pattern img {
	  width: 4vh;
	  height: 4vh;
	  float: left;
	  margin-right: 7px;
	  
	}
	.btn-add{
		background-color: #4261EF;
		color: #fff;
	}
	.all-account{
		margin-top: 25px;
		margin-bottom: 25px;
	}
	.card-all-accont{
		border: 0;
		margin-bottom: 2vh;
	}
	.textos{
		font-size: 10px;
	}

	/*Adicionar-conta*/

	.adicionar-conta{
		margin-top: 25px;
	}
	.input-conta{
		margin-top: 25px;
	}
	.input-adc{
		background-color: #EAEAEA;
		border: 0;
	}
	.btn-adc{
		width: 100%;
		margin-top: 25px;
		background-color: #4261EF;
		color: #fff;
	}
	/*Segurança*/
	.input-adc-on{
		background-color: #4261EF;
		border: 0;
		color: #ffff;
	}
	/*Acesso*/
	.input-acces{
		background-color: #EAEAEA;
		border: 0;
	}
	.button-acces{
		margin-top: 25px;
	}
	.btn-acces{
		width: 100%;
		margin-top: 25px;
		background-color: #4261EF;
		color: #fff;
	}
	/*View*/
	.info-account{
		margin-top: 25px;
		font-size: 12px;
	}
	.categoria-info{
		margin-top: 15vh;
		margin-bottom: 25px;
	}
	/*Register*/
</style>