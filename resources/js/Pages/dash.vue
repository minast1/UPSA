<template>
 <Layout>
	<b-container class=" mt-3" fluid>
	 <div>
       <b-card bg-variant="light" text-variant="dark" header="Programes Table" class="text-left shadow p-3 mb-5 bg-white rounded">
    <table class="table table-bordered table-sm table-striped table-responsive">
  <thead class="thead-dark">
    <tr>
       <th scope="col">Level</th>
      <th scope="col">Session</th>
      <th scope="col">Qualification</th>
      <th scope="col">Code</th>
    </tr>
  </thead>
  <tbody>
  
    <tr v-for="prog in programes" :id="prog.id">
      <td>{{prog.level}}</td>
      <td>{{prog.session}}</td>
      <td>{{prog.qualification}}</td>
      <td>{{prog.code}}</td>
    </tr>

  </tbody>
</table>
     <div class="pt-4">
      <h4 class="lead">Create Student Groups</h4>
      <hr>
      <b-form-select v-model="selected" :options="options" class="w-75"></b-form-select>
      <button type="button" class="btn btn-success btn-sm mt-2 ml-1" @click.prevent="makeGroups"><b-icon icon="plus"></b-icon> Create Groups</button>
       <div class="mt-1">
         <b-badge variant="info">Students {{students.length}}</b-badge>
         <b-badge variant="info">Groups {{selected ? selected :''}}</b-badge>
       </div>
     </div>

     <div class="pt-3" v-if="selected" v-for="(item, index) in items">
     <h4 class="lead">Group {{index +1}}</h4>
      <hr>
        <table class="table table-sm table-bordered table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Student Name</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="bunch in item">
      <th scope="row">{{bunch.id}}</th>
      <td>{{bunch.name}}</td>
    </tr>
  </tbody>
</table>
     </div>
      </b-card> 
  </div>
	</b-container>
</Layout>
</template>

<script>
 
  import Layout from './layout'
	export default {
		data () {
			return {
                selected : null,
                options : [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,
                     { value: null, text: 'Please select number of groups to create'}
                ],
                groups : null,
                 
		            items: null
			}
		},
		methods : {
			Logout () {
				this.$inertia.visit('/slogout')
			},

			 popToast() {
        // Use a shorter name for this.$createElement
        const h = this.$createElement
        // Increment the toast count
       
        // Create the message
        const vNodesMsg = h(
          'p',
          { class: ['text-center', 'mb-0'] },
          [
            h('b-spinner', { props: { type: 'grow', small: true } }),
            'Grouping.... ',
           
            h('b-spinner', { props: { type: 'grow', small: true } })
          ]
        )
        // Create the title
        const vNodesTitle = h(
          'div',
          { class: ['d-flex', 'flex-grow-1', 'align-items-baseline', 'mr-2'] },
          [
            
            h('small', { class: 'ml-auto text-italics' }, 'just a moment')
          ]
        )
        // Pass the VNodes as an array for message and title
        this.$bvToast.toast([vNodesMsg], {
          title: [vNodesTitle],
          solid: true,
          variant: 'warning'
        })     
            },   

           arrayToGroups(source, groups) {  
                      
                     //This is the array of groups to return:
                     this.items = [];

                     //work out the size of the group
                     let groupSize = Math.ceil(source.length/groups);
                       
                     //clone the source array so we can safely splice it (splicing modifies the array)
                     let queue = source.slice(0);
                           
                     for (let r=0;r<groups;r++) {
                       //Grab the next groupful from the queue, and append it to the array of groups
                       this.items.push(queue.splice(0, groupSize)); 
                                 
                     }       
             //return this.items;
             
                },

                makeGroups (event) {
                 
                     this.arrayToGroups(this.students , this.selected) ;
                  
                   
                }
		         },

		props : {
			students : {},
      programes : {},
      
  
		},

		computed : {
			MakeGroups () {
			  return  this.arrayToGroups(this.students , this.selected) ;
               
	            }
		} ,// End of Computed

    components: {
      Layout
    },
	}
  
</script>