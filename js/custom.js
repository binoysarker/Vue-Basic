var vueApp = new Vue({
	el:'#vue-app',
	data:{
		name:'Binoy ',
		job:'Studnet',
		website:'http://www.google.com',
		link:"<a href='http://www.google.com' title=\"\">google new</a>",
		age:25,
		x:0,
		y:0,
		a:0,
		available:false,
		b:0,
		nearby:false,

		error:false,
		success:false,
		characters:['item1','item2','item3','item4'],
		persons:[
			{name:'name1',age:23},
			{name:'name2',age:32},
			{name:'name3',age:25},
			{name:'name4',age:27},
		],
		persons2:[
			[{name:'name1',age:23}],
			[{name:'name2',age:32}],
			[{name:'name3',age:25}],
			[{name:'name4',age:27}],
		],

	},
	methods:{
		greeting(time){
			
			return 'Good '+time + ' '+ this.name;
		},
		addbtn:function (number) {
			if (number == 1) {
				this.age ++;
			}else{
				this.age +=10;
			}
		},
		subbtn: function(number){
			if (number == 1) {
				this.age --;
			}else{
				this.age -=10;
			}
		},
		updateXY:function(event){
			this.x = event.clientX;
			this.y = event.clientY;
		},
		stopclick:function(){
			alert('you can not go to this link');
		},
		logname:function(){
			console.log(''+this.name);
		},
		logage:function(){
			console.log(''+this.age);
		},


	},
	computed:{
		addToA:function(){
			return this.a + this.age;
		},
		addToB:function(){
			return this.b + this.age;	
		},
		compClasses:function(){
		return {
			red:this.available,
			nearby:this.nearby
		};
	}
	},

});