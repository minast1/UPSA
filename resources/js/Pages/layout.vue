<template>
<div class="py-4">
    <b-navbar toggleable="lg" type="dark" variant="info">
    <b-navbar-brand href="#"></b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
       <inertia-link class="nav-link" href="/home" method="get" :style="url == '/home' ? active : '' ">Home</inertia-link>
        <inertia-link class="nav-link" href="/Admin/assignments" method="get" :style="url == '/Admin/assignments' ? active : '' ">Assignments</inertia-link>
          <inertia-link class="nav-link" href="/Admin/programe" method="get" :style="url == '/Admin/programe' ? active : '' ">Programes</inertia-link>
          <inertia-link class="nav-link" href="/Admin/notes" method="get" :style="url == '/Admin/notes' ? active : '' ">LectureNotes</inertia-link>
          <inertia-link class="nav-link" href="/Admin/course" method="get" :style="url == '/Admin/course' ? active : '' ">Courses</inertia-link>
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
        <article>
        	<slot />
        </article>
</div>

</template>

<script>
	 import axios from 'axios';
	export default {

		data () {
			return {
        active : 'border-bottom: 3px solid red',
        url : window.location.pathname 
              
			}
		},

		methods : {
			async handleLogout () {
                 await axios.post('/logout', {});
                 window.location.href= "/" ;
				
			    }

         
			},

			props : ['flash']

	
		}
</script>