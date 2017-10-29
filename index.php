<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vue tutorial</title>
	<link rel="stylesheet" href="style.css">
	<script src="vue.js" type="text/javascript"></script>
</head>
<body>
	<div id="vue-app">
		<h1>Name: {{name}} and Job is {{job}} </h1>
		<p>{{greeting("night")}} </p>
		<a :href='website' title="">google</a>
		<p v-html='link'></p>
		<br>
		<br>
		<p>My age is {{age}} </p>
		<button type="" @click='addbtn(1)'>Add age</button>
		<button type="" @dblclick='addbtn(10)'>Add 10 age</button>
		<button type="" @click='subbtn(1)'>Subtract age</button>
		<button type="" @dblclick='subbtn(10)'>Subtract 10 age</button>
		<br>
		<br>
		<div class="canvas" @mousemove='updateXY'>
			{{x}}, {{y}}			
		</div>
		<br>
		<a href="http://www.google.com" @click.prevent='stopclick' title=""> Prevent google</a>
		<br>
		<input type="text" name="" v-model='name' @keyup.enter='logname' value="" placeholder="">
		<input type="text" name="" v-model='age' @keyup.enter='logage' value="" placeholder="">
		<br>
		<h4>press enter to see the name: {{name}} in the console</h4>
		<h4>press enter to see the age: {{age}} in the console</h4>

		<br>
		<button type="" @click='a++'>Add A</button>
		<button type="" @click='b++'>Add B</button>
		<h3>A - {{a}} </h3>
		<h3>B - {{b}} </h3>
		<h3>age + A = {{addToA}} </h3>
		<h3>age + B = {{addToB}} </h3>
		<br>
		<!-- dynamic css class -->
		<button type="" @click="available = !available">Toggle available</button>
		<button type="" @click="nearby = !nearby">Toggle nearby</button>
		<div :class="compClasses">
			<span>Dynamic class</span>
		</div>
		<br>
		<br>
		<!-- if else prctivece -->
		<button type="" @click='error = !error'>error</button>
		<button type="" @click='success = !success'>success</button>
		<div v-if="error">show error</div>
		<div v-else-if="success">show success</div>
		<br>
		<br>
		<!-- for loop practice  -->
		<ul>
			<li v-for='character in characters'>{{character}} </li>
		</ul>
		<ul v-for="person in persons">
			<li>{{person.name}},{{person.age}} </li>
		</ul>
		<ul v-for='person in persons2'>
			<li>{{person[0].name}}, {{person[0].age}} </li>
		</ul>
	</div>


	<!-- making of a vue game -->
	<div id="vue-game">
		<!-- game canvas -->
		<div id="bag" :class='{blust:ended}'>
			
		</div>

		<!-- health bar  -->
		<div id="bag-health">
			<div :style="{width:health +'%'}">
				
			</div>
		</div>

		<!-- control -->
		<div id="control">
			<button type="" @click='punch()' v-show='!ended'>PUNCH</button>
			<button type="" @click='restart()'>RESTART</button>
		</div>
	</div>
	<script type="text/javascript" src="js/custom.js"></script>
	<script type="text/javascript" src="js/game.js"></script>
</body>
</html>