<!-- page CSS -->
<link href="assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
<link href="assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
<link href="assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
<link href="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
<link href="assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
<style type="text/css">
		.blur   {
		    filter: blur(5px);
		    -webkit-filter: blur(5px);
		    -moz-filter: blur(5px);
		    -o-filter: blur(5px);
		    -ms-filter: blur(5px);
		}
		#overlay    {
		    position: fixed;
		    display: none;
		    left: 0px;
		    top: 0px;
		    right: 0px;
		    bottom: 0px;
		    background: rgba(255,255,255,.8);
		    z-index: 999;
		}
		#popup {
		    position: absolute;
		    width: 95%;
		    height: 95%;
		    left: 0px;
		    right: 0px;
		    top: 1%;
		    bottom: 0px;
		    margin: auto;
		}
		/* // /////////////////??? */
		/* Button desgin style */
		/* ///////////////////////////// */
		.circle {
		cursor: pointer;
		width: 200px;
		height: 200px;
		}

		.mask-a,
		.mask-b {
		border-radius: 100%;
		position: relative;
		width: 100%;
		height: 100%;
		}

		.mask-a {
		background: #1b2d41;
		overflow: hidden;
		-webkit-mask-position: 0 0;
		-webkit-mask-size: 215px 215px;
		-webkit-mask-image: url(assets/images/button/mask_svg.svg);
		z-index: 10;
		}

		.mask-b {
		background: #1b2d41;
		}

		/*=====================================================================================
			OK
		=======================================================================================
		*/
		.cursor,
		.cursor::before {
		background: url(assets/images/button/ok_1.svg) no-repeat center center;
		position: absolute;
		width: 44px;
		height: 44px;
		}

		.cursor {
		background-position: 0px -31px;
		top: 7em;
		left: 9em;
		will-change: transform;
		transform: translate3d(0, 0, 0);
		transition: transform 550ms ease;
		}
		.cursor::before {
		background-position: -43px -30px;
		content: "";
		top: -0.3em;
		left: 0.3em;
		will-change: transform;
		transform: translateX(0px) translateZ(0px);
		transition: transform 550ms ease;
		}

		.ok-btn {
		background: #1AAF5D;
		border-radius: 0.7em;
		box-shadow: 0 5px 0 #0A7237;
		color: #fff;
		font-size: 2em;
		font-weight: 500;
		text-shadow: 0 2px 0 #0A7237;
		text-align: center;
		position: absolute;
		top: 50%;
		left: 50%;
		width: 148px;
		height: 70px;
		margin-left: -74px;
		margin-top: -35px;
		will-change: transform;
		transform: translateY(0px) translateZ(0px);
		line-height: 70px;
		transition: all 550ms ease;
		}

		.circle:hover > .mask-b > .ok-btn {
		background: #179951;
		box-shadow: 0 0 0 1px #064320, inset 0 1px 0 0 #0A7237;
		transform: translateY(5px) translateZ(0px);
		transition: all 450ms 100ms cubic-bezier(0.68, -0.55, 0.265, 1.65);
		}
		.circle:hover > .mask-b > .cursor {
		transform: translate3d(-0.3em, 0.5em, 0);
		transition: transform 450ms cubic-bezier(0.68, -0.55, 0.265, 1.65);
		}
		.circle:hover > .mask-b > .cursor::before {
		transform: translateX(-4px) translateZ(0px);
		transition: transform 450ms cubic-bezier(0.68, -0.55, 0.265, 1.65);
		}

</style>