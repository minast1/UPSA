<template>
	<div class="py-4">
       <b-navbar toggleable="lg" type="dark" variant="info">
    <b-navbar-brand href="#"></b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
       <inertia-link class="nav-link" href="/shome" method="get">Home</inertia-link>
       
      </b-navbar-nav>

      
      <b-navbar-nav class="ml-auto">
        <b-nav-form>
          <b-form-input size="sm" class="mr-sm-2" placeholder="Search"></b-form-input>
          <b-button size="sm" class="my-2 my-sm-0" variant="success" type="submit">Search</b-button>
        </b-nav-form>

        <b-nav-item-dropdown right>
         
          <template v-slot:button-content>
            <em>{{ $page.auth.user.name }}</em>
          </template>
          <b-dropdown-item href="#">Profile</b-dropdown-item>
          <b-dropdown-item href="#" @click.prevent= "handleLogout">Sign Out</b-dropdown-item>
        </b-nav-item-dropdown>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>

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

            <b-card bg-variant="dark" text-variant="white"> 
              <b-img v-bind="mainProps" rounded="circle" :src= "ProfileImage()" alt="Circle image"></b-img>
              <p class="lead ml-auto">Faculty of Information and Communication Studies</p>

            </b-card>

            <hr>
                <b-table :items="items" :fields="fields" head-variant="dark" :per-page="perPage" :current-page="currentPage" :filter="filter" @filtered="onFiltered" class="table table-bordered table-sm table-striped table-responsive">
                
                        <template v-slot:cell(action)="row">
              <b-button variant="info" @click="courseNotes(row.item)" size="sm" class="mb-1">  <b-icon icon="eye"></b-icon> view lecturenote</b-button>
              <b-button variant="info" @click="courseAssignments(row.item)" size="sm">  <b-icon icon="eye"></b-icon> view assignments</b-button>
             
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


                           <b-card bg-variant="light" header-text-variant="white" header-bg-variant="dark"  :header="headertitle" class="text-left text-dark mt-4" v-if="show">
                              <b-container class="p-3 bg-dark">
                                 <b-row cols="1" cols-sm="2" cols-md="4" cols-lg="6">
                                  <b-col class="p-2" v-if="togglelecturenotes" v-for="note in lecturenotes" :key="note.id"><a :href="downloadItem(note)" download="download"><b-img v-bind="mainProps" :src="getCoverImage(note.file_name)" alt="" ></b-img></a><br>
                                      <span class="text-white">{{note.name | shorten}}</span></b-col> 
                                   <b-col class="p-2" v-if="toggleassigments" v-for="assignment in assignments" :key="assignment.id"><a :href="downloadItem(assignment)" download="download"><b-img v-bind="mainProps" :src="getCoverImage(assignment.file_name)" alt="" ></b-img></a><br>
                                      <span class="text-white">{{assignment.name | shorten}}</span></b-col>           
                                </b-row>
                              </b-container>
                         </b-card>
                  </div>      
                </div>
              </div>
       
	</div>

</template>

<script>
     import axios from 'axios';
	import layout from './layout' ;
	export default {
		data () {
			return {
          fields : ['code','name','action'],
          mainProps: {  width: 90, height:80, class: 'm1' },
              items : this.courses,
              currentPage : 1,
              perPage : 5,
              filter : null,
              attachment : [], 
               id   : null ,
               headertitle : '', 
               show : false,
               lecturenotes : [],
               togglelecturenotes : false ,
               toggleassigments : false, 
               assignments : []
			}
		},

		components : {
			layout
		},

		props : ['profile', 'courses', 'flash'],

    filters : {
      shorten : function (value) {
         return  value.slice(0, 20) + '...' ;
      }
    },

		methods : {
			async handleLogout () {
                 await axios.post('/slogout', {});
                 window.location.href= "/" ;
				
			    },

       onFiltered(filteredItems) {
        // Trigger pagination to update the number of buttons/pages due to filtering
        this.totalRows = filteredItems.length
        this.currentPage = 1
      },
            courseNotes(item) {
              this.toggleassigments = false ;
              this.togglelecturenotes = true ;
              this.headertitle =  `Lecture Notes for ${item.name}`
              this.id = item.id ;
               this.lecturenotes = item.notes
              this.show = true ;     
                  
      },

           courseAssignments(item) {
                this.togglelecturenotes = false ;
                this.toggleassigments = true ;
               this.headertitle = `Class Assignments for ${item.name}` ;
               this.id = item.id ;
                this.assignments = item.assignments
               this.show = true; 
           }, 

      formatNames(files) {
                if (files.length === 1) {
                  return files[0].name
                 } else {
                 return `${files.length} files selected`
                   }
            },

        ProfileImage() {
           return '/homepage/img/ITlogo.jpg';
        },

           getCoverImage (name) {
            
             this.mime =  this.sanitizeName(name) ;
                switch (this.mime) {
                            case 'docx':
                              return '/storage/images/word.svg';
                            case 'pdf':
                              return '/storage/images/pdf.svg';
                            case 'txt':
                              return '/storage/images/txt.svg';
                            case 'xlsx' :
                              return '/storage/images/excel.svg';
                            case 'pptx' :
                              return '/storage/images/powerpoint.svg';
                            default:
                              return '/storage/images/pdf.svg';
                         }

          },
            
                  sanitizeName(name) {
                    return  name.split(".").pop()
                  },
              downloadItem (item) {
            
             return `/storage/${item.id}/${item.file_name}` ;
           }
			},

      computed : {
      rows () {
        return this.items.length
      }
    },
	}
</script>