<template>
    <div class="page-content mx-5">
        <div class="table-responsive resume-list">
            <h2 class="text-center">Resume List</h2>
    
            <table class="table table-hover table-bordered table-striped ">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Developer Type</th>
                    <th scope="col">Skill</th>
                    <th scope="col">status</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="resume in resumes" :key="resume.id">
                    <td>{{ resume.id }}</td>
                    <td>
                      <div class="">
                        <img :src="publicUrl + '/storage/avatar/' + resume.avatar" width="50" height="50"/>
                      </div>
                    </td>
                    <td>{{ resume.firstname }}</td>
                    <td>{{ resume.lastname }}</td>
                    <td>{{ resume.email }}</td>
                    <td>{{ resume.dev_type }}</td>
                    <td> 
                      <p v-for="(skill, index) in JSON.parse(resume.skill)" :key="index">
                        <span>{{skill.name}}</span>/
                        <span>{{skill.year}}</span><br/>
                      </p> 
                    </td>
                    <td><span class="badge badge-pill" :class="resume.status_color">{{ resume.status }}</span></td>
                    <td>
                        <div class="btn-group" role="group">
                            <button class="btn" :class="resume.btn_status_color" @click="activeResume(resume.id)">{{ resume.btn_status }}</button>
                            <router-link :to="{name: 'edit', params: { id: resume.id }}" class="btn btn-success">Edit</router-link>
                            <button class="btn btn-danger" @click="deleteResume(resume.id)">Delete</button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
 
<script>
  export default {
    data() {
      return {
        resumes: [],
        status_color: '', 
        btn_status_color: 'btn-danger',
        publicUrl: ''
      }
    },
    created() {
      this.axios
        .get('http://localhost:8000/api/resume/')
        .then(response => {
          this.resumes = response.data;
          this.publicUrl = window.location.origin;
        });
    },
    methods: {
      deleteResume(id) { 
        this.axios
          .delete(`http://localhost:8000/api/resume/${id}`)
          .then(response => {
            let i = this.resumes.map(data => data.id).indexOf(id);
            this.resumes.splice(i, 1)
            this.$notify(
              {
                group: "top",
                title: "Success",
                text: response.data,
                color: "text-green-500",
                bgColor: "bg-green-500"
              },
              6000
            );
          });
      },
      activeResume(id) { 
        this.axios
          .post(`http://localhost:8000/api/active/${id}`)
          .then(response => {
            if (response.data.prew_id != ""){
              let j = this.resumes.map(data => data.id).indexOf(response.data.prew_id);
              this.resumes[j].status = "Deactive";
              this.resumes[j].status_color = 'badge-secondary';
              this.resumes[j].btn_status = 'Active';
              this.resumes[j].btn_status_color = 'btn-danger';
            }
            let i = this.resumes.map(data => data.id).indexOf(id);
            this.resumes[i].status = response.data.status;
            this.resumes[i].status_color = response.data.status_color;
            this.resumes[i].btn_status = response.data.btn_status;
            this.resumes[i].btn_status_color = response.data.btn_status_color;
            this.$notify(
              {
                group: "top",
                title: "Success",
                text: response.data.msg,
                color: "text-green-500",
                bgColor: "bg-green-500"
              },
              6000
            );
        });
      }
    }
  }
</script>
<style scoped>

.table th, .table td{
    vertical-align: middle;
}

</style>