<template>
<Layout>
	<div class="container-fluid mt-3">
		 <div class="card shadow p-3 mb-5 bg-white rounded">
				  <div class="card-body">
				  	<div class="mb-2">
				  		 <b-button variant="success" @click="showForm" size="sm">  <b-icon icon="plus"></b-icon>Add Programe</b-button>
				  	</div>
				     
				  	 <b-table :items="items" :fields="fields" head-variant="dark"  class="table table-bordered table-sm table-striped table-responsive">
				  	   </b-table>

                    <div  class="container pt-3" v-if="show">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                 <b-card bg-variant="info" text-variant="white" header="Add New Programe" class="text-left">
									<form>
		                                <div class="form-group">
									       <label for="validationServer03">Level</label>
									      <select :class="[ $page.errors.hasOwnProperty('level') ?'custom-select is-invalid' : '','custom-select' ]" id="validationServer04"  v-model="form.level" required>
									       <option selected disabled :value="null">Choose...</option>
									        <option  v-for="level in levels" :value="level" >{{level}}</option>
									      </select>
									      <div v-if="$page.errors.level" class="invalid-feedback">
									        {{$page.errors.level[0]}}
									      </div>
									  </div>

                                            <div class="form-group">
									       <label for="validationServer03">Session</label>
									      <select :class="[ $page.errors.hasOwnProperty('session') ?'custom-select is-invalid' : '','custom-select' ]" id="validationServer04"  v-model="form.session" required>
									       <option selected disabled :value="null">Choose...</option>
									        <option  v-for="session in sessions" :value="session" >{{session}}</option>
									      </select>
									      <div v-if="$page.errors.session" class="invalid-feedback">
									        {{$page.errors.session[0]}}
									      </div>
									  </div>

                                            <div class="form-group">
									       <label for="validationServer03">Qualification</label>
									      <select :class="[ $page.errors.hasOwnProperty('qualification') ?'custom-select is-invalid' : '','custom-select' ]" id="validationServer04"  v-model="form.qualification" required>
									       <option selected disabled :value="null">Choose...</option>
									        <option  v-for="qualification in qualifications" :value="qualification" >{{qualification}}</option>
									      </select>
									      <div v-if="$page.errors.qualification" class="invalid-feedback">
									        {{$page.errors.qualification[0]}}
									      </div>
									  </div>

									   <div class="form-group">
									       <label for="validationServer03">Code</label>
									      <select :class="[$page.errors.hasOwnProperty('code') ?'custom-select is-invalid' : '' ,'custom-select']" id="validationServer04"  v-model="form.code" required>
									        <option selected disabled :value="null">Choose...</option>
									        <option v-for="code in codes" :value="code">{{code}}</option>
									      </select>
									      <div v-if="$page.errors.code" class="invalid-feedback">
									        {{$page.errors.code[0]}}
									      </div>
									  </div>
									   <b-button @click.prevent="onSubmit" type="submit" variant="primary">Submit</b-button>
									</form>
                          </b-card>
                     </div>
                 </div>
                 </div>
				  </div>
				</div>
	</div>
</Layout>	



</template>

<script>
	
	 import Layout from './layout';
	export default {

		data () {
			return  {
				fields : ['level','session','qualification','code'],
                items: this.programes,
                 levels: ['100','200','300','400'],
		        codes : ['1MD','1ED','2MD','2ED','3MD','3ED','4MD','4ED'],
		        sessions : ['morning', 'evening'],
		        qualifications : ['degree','diploma'],
               show: false,
               form: {
			          level: null,
			          session: null,
			          qualification:null,
			          code: null
                    },

			}
		},

		methods : {
			  showForm() {
				this.show = true ;
			},

			onSubmit() {

	          this.$inertia.post('/Admin/programe/', this.form) ;

					this.show = false ;		
				
			}
		},

		props : ['programes', 'adminusers','flash'],

		 components: {
      Layout
    },

        watch : {
			programes : function (value) {
                 this.items = value;
                 this.$bvToast.toast(this.flash.message, {
		          title: 'Success!',
		          autoHideDelay: 5000,
		          variant: 'warning',
		          solid: true
		        }) 
			}
		},
		
	}
</script>