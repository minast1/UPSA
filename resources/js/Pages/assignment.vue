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
				  	    <b-table :items="items" :fields="fields" head-variant="dark" :per-page="perPage" :current-page="currentPage" :filter="filter" @filtered="onFiltered" class="table table-bordered table-sm table-striped">
				  	   	
							  	   	  <template v-slot:cell(action)="row">
			        <b-button variant="info" @click="setFormValues(row.item)" size="sm">  <b-icon icon="pencil"></b-icon> Add Assignment</b-button>
			       
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
                           <b-card bg-variant="light" header-text-variant="white" header-bg-variant="dark"  header="Add New Lecture Note" class="text-left text-dark mt-4">
							<b-form   class="text-white" >
								<b-form-group
						        id="input-group-1"
						        label="Course Lecture Note:"
						        label-for="input-1"
						         description="* You can select multiple files at a time (Ctrl + attachments) : Please name files approrpriately before adding"	        
						      >
						        <b-form-file  class="text-dark" multiple :file-name-formatter="formatNames" v-model="attachment"></b-form-file>
						         
						      </b-form-group>
                                
							      <b-button @click.prevent="onSubmit" type="submit" variant="success">Submit</b-button>
                               </b-form>
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
               fields : ['code','name','action'],
          
              items : this.courses,
              currentPage : 1,
              perPage : 5,
              filter : null,
              attachment : [], 
               id   : null ,
               show : false
             
              }
                
			},
		
		methods : {
			
			 onFiltered(filteredItems) {
        // Trigger pagination to update the number of buttons/pages due to filtering
        this.totalRows = filteredItems.length
        this.currentPage = 1
      },
            setFormValues(item) {
            	this.id = item.id ;
            	this.attachment = item.attachment
				this.show = true ;     
                  
			},

			onSubmit() {
				let data = new FormData();
				data.append('id', this.id);
				
                  
				for (let i = 0; i < this.attachment.length; i++) {
					data.append('assignment'+[i +1], this.attachment[i]) 
				};

            	this.$inertia.post('/assignments', data).then( () => {

            		  this.$bvToast.toast(this.flash.message, {
		          title: 'Success!',
		          autoHideDelay: 5000,
		          variant: 'warning',
		          solid: true
		           })

		           this.show = true ; 
            	});
            	
			},

			formatNames(files) {
                if (files.length === 1) {
                  return files[0].name
                 } else {
                 return `${files.length} files selected`
                   }
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

		props : ['courses','flash'],
		
	
	}
</script>