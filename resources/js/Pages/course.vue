<template>
<Layout>
	<div class="container-fluid mt-3">
		 <div class="card shadow p-3 mb-5 bg-white rounded">
				  <div class="card-body">
				  	<div class="row">
				  		<div class="col-7">
				  			 <b-form-input  class="w-100" placeholder="Type to Search" v-model="filter" id="filterInput"></b-form-input>     
				  		</div>
				  		<div class="col-5">
				  			<b-button :disabled="!filter" @click="filter=''" variant="success">Clear</b-button>

				  		</div>
				  	</div>
				  	<hr>
				  		<div class="mb-2">
				  		 <b-button variant="success" v-b-modal.modal-1 size="sm">  <b-icon icon="plus"></b-icon>Add Course</b-button>
				  		  <b-modal id="modal-1" title="Add New Course" ref="my-modal" :hide-footer="true">
                           <b-card bg-variant="light" text-variant="dark" class="text-left">
									<form>
		                                <div class="form-group"> 
										<label for="validationServer03">Course Code</label>
									      <input type="text" :class="[$page.errors.hasOwnProperty('code') ? 'form-control is-invalid' : '' , 'form-control']" id="validationServer03" v-model="addform.code" required>
									      <div v-if="$page.errors.code" class="invalid-feedback">
									        {{$page.errors.code[0]}}
									      </div>
                                           </div>

                                           <div class="form-group">
                                           <label for="validationServer03">Course Name</label>
									      <input type="text" :class=" [$page.errors.hasOwnProperty('name') ? 'form-control is-invalid' : '' , 'form-control']" id="validationServer03" v-model="addform.name" required>
									      <div v-if="$page.errors.name" class="invalid-feedback">
									        {{$page.errors.name[0]}}
									      </div>
                                            </div>

                                            <div class="form-group">
									       <label for="validationServer03">Course Lecturer</label>
									      <select :class="[ $page.errors.hasOwnProperty('lecturer') ?'custom-select is-invalid' : '','custom-select' ]" id="validationServer04"  v-model="addform.lecturer" required>
									       <option   value="null">Choose...</option>
									        <option  v-for="user in users" :value="user.id" >{{user.name}}</option>
									      </select>
									      <div v-if="$page.errors.lecturer" class="invalid-feedback">
									        {{$page.errors.lecturer[0]}}
									      </div>
									  </div>

									   <div class="form-group">
									       <label for="validationServer03">Semester</label>
									      <select :class="[$page.errors.hasOwnProperty('semester') ?'custom-select is-invalid' : '' ,'custom-select']" id="validationServer04"  v-model="addform.semester" required>
									        <option selected disabled value="null">Choose...</option>
									        <option v-for="sem in semesters" :value="sem">{{sem}}</option>
									      </select>
									      <div v-if="$page.errors.semester" class="invalid-feedback">
									        {{$page.errors.semester[0]}}
									      </div>
									  </div>

									   <div class="form-group">
									       <label for="validationServer03">Programe</label>
									      <select :class="[$page.errors.hasOwnProperty('programe') ?'custom-select is-invalid' : '' ,'custom-select']"  id="validationServer04"  v-model="addform.programe" required>
									        <option selected disabled value="null">Choose...</option>
									        <option v-for="prog in progs" :value="prog.id">{{prog.code}}</option>
									      </select>
									      <span v-if="$page.errors.programe" class="invalid-feedback">
									        {{$page.errors.programe[0]}}
									      </span>
									  </div>
									   <b-button @click.prevent="Add" type="submit" variant="primary">Submit</b-button>
									</form>
                          </b-card>
                         </b-modal>
				  	</div>
				  	   <b-table :items="items" :fields="fields" head-variant="dark" :per-page="perPage" :current-page="currentPage" :filter="filter" @filtered="onFiltered" class="table table-bordered table-sm table-striped table-responsive">
				  	   	
							  	   	  <template v-slot:cell(action)="row">
			        <b-button variant="info" @click="setFormValues(row.item)" size="sm">  <b-icon icon="pencil"></b-icon> Edit</b-button>
			       
			      </template>	
			      <template v-slot:cell(lecturer)="row">
                     {{ row.item.user.name}}
                 </template>
                 <template v-slot:cell(programe)="row">
                     {{ row.item.programe.code}}
                 </template>				
				  	   </b-table>

				  	    <b-pagination
					      v-model="currentPage"
					      :total-rows="rows"
					      :per-page="perPage"
					     
					      align="center"
					    ></b-pagination>
                         
                    <div  class="container pt-3" v-if="show">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                 <b-card bg-variant="light" header-text-variant="white" header-bg-variant="dark"  header="Edit Selected Course" class="text-left text-dark mt-4">
									<form>
		                                <div class="form-group"> 
										<label for="validationServer03">Course Code</label>
									      <input type="text" :class="[$page.errors.hasOwnProperty('code') ? 'form-control is-invalid' : '' , 'form-control']" id="validationServer03" v-model="form.code" required>
									      <div v-if="$page.errors.code" class="invalid-feedback">
									        {{$page.errors.code[0]}}
									      </div>
                                           </div>

                                           <div class="form-group">
                                           <label for="validationServer03">Course Name</label>
									      <input type="text" :class=" [$page.errors.hasOwnProperty('name') ? 'form-control is-invalid' : '' , 'form-control']" id="validationServer03" v-model="form.name" required>
									      <div v-if="$page.errors.name" class="invalid-feedback">
									        {{$page.errors.name[0]}}
									      </div>
                                            </div>

                                            <div class="form-group">
									       <label for="validationServer03">Course Lecturer</label>
									      <select :class="[ $page.errors.hasOwnProperty('lecturer') ?'custom-select is-invalid' : '','custom-select' ]" id="validationServer04"  v-model="form.lecturer" required>
									       <option   :value="null">Choose...</option>
									        <option  v-for="user in adminusers" :value="user.id" >{{user.name}}</option>
									      </select>
									      <div v-if="$page.errors.lecturer" class="invalid-feedback">
									        {{$page.errors.lecturer[0]}}
									      </div>
									  </div>

									   <div class="form-group">
									       <label for="validationServer03">Semester</label>
									      <select :class="[$page.errors.hasOwnProperty('semester') ?'custom-select is-invalid' : '' ,'custom-select']" id="validationServer04"  v-model="form.semester" required>
									        <option selected disabled value="null">Choose...</option>
									        <option v-for="sem in semesters" :value="sem">{{sem}}</option>
									      </select>
									      <div v-if="$page.errors.semester" class="invalid-feedback">
									        {{$page.errors.semester[0]}}
									      </div>
									  </div>

									   <div class="form-group">
									       <label for="validationServer03">Programe</label>
									      <select :class="[$page.errors.hasOwnProperty('programe') ?'custom-select is-invalid' : '' ,'custom-select']"  id="validationServer04"  v-model="form.programe" required>
									        <option selected disabled value="null">Choose...</option>
									        <option v-for="prog in progs" :value="prog.id">{{prog.code}}</option>
									      </select>
									      <span v-if="$page.errors.programe" class="invalid-feedback">
									        {{$page.errors.programe[0]}}
									      </span>
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
		data() {
			return {
              fields : ['code','name','lecturer','semester','programe','action'],
              semesters : ['first','second'],
              items : this.courses,
              progs : this.programes, 
              lecturers : this.adminusers, 
              users: this.adminusers,
              currentPage : 1,
              perPage : 5,
              filter : null,
              form : {
              	id : null ,
              	name : '',
              	code : '',
              	lecturer : null,
              	semester : '',
              	programe : null,
              	small : true
              },
              addform : {
              	name : '',
              	code : '',
              	lecturer : '',
              	semester : '',
              	programe : '',
              	small : true
              },
               show : false
             
              
              
			}
		},

		methods : {
			Add() {
			
			 this.$inertia.post('/Admin/course', this.addform) ;
	  
			},

			 onFiltered(filteredItems) {
        // Trigger pagination to update the number of buttons/pages due to filtering
        this.totalRows = filteredItems.length
        this.currentPage = 1
      },
            setFormValues(item) {
				this.show = true ;
				
                  this.form.id = item.id;
                  this.form.name = item.name;  
	              	this.form.code = item.code;
	              	this.form.lecturer = item.user.id;
	              	this.form.semester = item.semester ;
	              	this.form.programe = item.programe.id
			},

			onSubmit() {

	          this.$inertia.patch(`/Admin/course/${this.form.id}`, this.form) ;

					this.show = false ;		
				
			},
			delete (item) {

			}
		}, 

		computed : {
			rows () {
				return this.items.length
			}

			

		},

		 components: {
      Layout
    },

		props : ['courses' , 'adminusers','programes', 'flash'],
		
		mounted () {

			//this.fetchLecturers()                                                                                                                                                                          
		},

		watch : {
			courses : function (value) {
                 this.items = value;
                this.$refs['my-modal'].hide();  
                
                 this.$bvToast.toast(this.flash.message, {
		          title: 'Success!',
		          autoHideDelay: 5000,
		          variant: 'warning',
		          solid: true
		        }) 
			}
		},

		created () {
			//this.items = this.courses
		}
		
	}
</script>