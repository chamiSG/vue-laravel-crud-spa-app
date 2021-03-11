<template>
    <div class="page-content">
      <div class="container">
        <div class="cover shadow-lg bg-white">
          <div class="cover-bg p-3 p-lg-4 text-white">
                <h2 class="h3 mb-0">Create Your Resume</h2>
          </div>
          <form @submit.prevent="createResume">
            <div class="profile-section pt-4 px-3 px-lg-4 mt-1">
                <div class="row">
                    <h2 class="h3 mb-3">About Me</h2>
                    <div class="col-md-6">
                        <div class="row mt-2">
                            <div class="col-sm-4">
                                <div class="pb-1">First Name</div>
                            </div>
                            <div class="col-sm-8 mb-2">
                                <input class="form-control" type="text" id="firstname" name="firstname" placeholder="Anatoliy" required v-model="resume.firstname">
                            </div>
                            <div class="col-sm-4">
                                <div class="pb-1">Last Name</div>
                            </div>
                            <div class="col-sm-8 mb-2">
                                <input class="form-control" type="text" id="lastname" name="lastname" placeholder="Kondrate" required v-model="resume.lastname">
                            </div>
                            <div class="col-sm-4">
                                <div class="pb-1">Age</div>
                            </div>
                            <div class="col-sm-8 mb-2">
                                <input class="form-control" type="text" id="age" name="age" placeholder="23" required v-model="resume.age">
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="row mt-2">
                            <div class="col-sm-4">
                                <div class="pb-1">Email</div>
                            </div>
                            <div class="col-sm-8 mb-2">
                                <input class="form-control" type="email" id="email" name="email" placeholder="anatoliykondrate@gmail.com" required v-model="resume.email">
                            </div>
                            <div class="col-sm-4">
                                <div class="pb-1">Phone</div>
                            </div>
                            <div class="col-sm-8 mb-2">
                                <input class="form-control" type="text" id="phone" name="phone" placeholder="+72737462738" required v-model="resume.phone">
                            </div>
                            <div class="col-sm-4">
                                <div class="pb-1">Address</div>
                            </div>
                            <div class="col-sm-8 mb-2">
                                <input class="form-control" type="text" id="address" name="address" placeholder="140, City Center, New York, U.S.A" required v-model="resume.address">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row mt-2">
                            <div class="col-sm-2">
                                <div class="pb-1">Developer Type</div>
                            </div>
                            <div class="col-sm-10 mb-2">
                                <input class="form-control" type="text" id="dev_type" name="dev_type" placeholder="Graphic Designer & Web Developer" required v-model="resume.devType">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row mt-2">
                            <div class="col-sm-2">
                                <div class="pb-1">Proposal</div>
                            </div>
                            <div class="col-sm-10 mb-2">
                                <textarea class="form-control" style="resize: none;" id="dev_description" name="dev_description" rows="4"  placeholder="Text Here..." required v-model="resume.devDescription"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row mt-2">
                            <div class="col-sm-2">
                                <div class="pb-1">Avatar</div>
                            </div>
                            <div class="col-sm-10 mb-2">
                                <input class="form-control avatar" type="file" name="avatar" placeholder="Please upload your photo" required 
                                  @change="onFileChange"
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="d-print-none"/>
            <div class="skills-section px-3 px-lg-4">
                <h2 class="h3 mb-3">Professional Skills</h2>
                <div class="row">
                    <div class="col-md-2 offset-md-10 mb-2 text-right">
                        <button class="btn btn-primary mt-2 " type="button" @click="clickAddSkill">Add Skill</button>
                    </div>
                </div>
                <skill
                  v-for="(skill, index) in topSkills"
                  :key="index"
                  :skill="skill"
                  name="skills"
                  @remove="removeSkill(index)"
                  @nameChanged="skillNameChanged($event, index)"
                  @yearChanged="skillYearChanged($event, index)"
                />
            </div>
            <hr class="d-print-none"/>
            <div class="work-experience-section px-3 px-lg-4">
                <h2 class="h3 mb-4">Work Experience</h2>
                <div class="">
                    <div class="custom-card-primary timeline-card-primary card shadow-sm">
                        <div class="card-body">
                            <work-experience
                              v-for="(work, index) in works"
                              :key="index"
                              :work="work"
                              name="works"
                              @removeWork="removeWork(index)"
                              @workTitleChanged="workTitleChanged($event, index)"
                              @workClientChanged="workClientChanged($event, index)"
                              @workTimeChanged="workTimeChanged($event, index)"
                              @workContentChanged="workContentChanged($event, index)"
                            />
                            <div class="row jsutify-content-end">
                                <button class="btn btn-primary mt-2 " type="button" @click="clickAddWork">Add Work</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="d-print-none"/>
            <div class="page-break"></div>
            <div class="education-section px-3 px-lg-4 pb-4">
                <h2 class="h3 mb-4">Education</h2>
                <div class="">
                    <div class="custom-card-success timeline-card-success card shadow-sm">
                        <div class="card-body">
                            <education
                              v-for="(edu, index) in edus"
                              :key="index"
                              :edu="edu"
                              name="edus"
                              @removeEdu="removeEdu(index)"
                              @eduTitleChanged="eduTitleChanged($event, index)"
                              @eduClientChanged="eduClientChanged($event, index)"
                              @eduTimeChanged="eduTimeChanged($event, index)"
                              @eduContentChanged="eduContentChanged($event, index)"
                            />
                            <div class="row">
                                <button class="btn btn-success mt-2 " type="button" @click="clickAddEdu">Add Education</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="d-print-none"/>
            <div class="save-section px-3 px-lg-4 pb-4">
                <div class="row justify-content-center">
                    <div class="col-sm-2">
                        <div class="row">
                            <button class="btn btn-primary mt-2" type="submit">Save</button>
                        </div>
                    </div>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
</template>
 
<script>
import Skill from '../components/skill-component'
import WorkExperience from '../components/work-experience-component'
import Education from '../components/education-component'
export default {
  components: {
    Skill,
    WorkExperience,
    Education
  },
  data() {
    return {
      resume: {
        firstname: null,
        lastname: null,
        age: null,
        email: null,
        phone: null,
        address: null,
        devType: null,
        devDescription: null,
        avatar: null,
        skills: null,
        works: null,
        edus: null,
      },
      
      topSkills: [{
        name: 'HTML',
        year: 0
      }],
      works: [{
        title: '',
        client: '',
        time: '',
        content: ''
      }],
      edus: [{
        title: '',
        client: '',
        time: '',
        content: ''
      }]
    }
  },
  mounted() {
    var vm = this;
    vm.resume.skills = this.topSkills;
    vm.resume.works  = this.works;
    vm.resume.edus   = this.edus;
  },
  methods: {

    onFileChange(event){
      this.resume.avatar = event.target.files[0];
    },

    // Init Skill
    clickAddSkill() {
      this.topSkills.push({
        name: 'HTML',
        year: 0
      })
    },
    removeSkill(index) {
      this.topSkills.splice(index, 1)
    },
    skillNameChanged(v, index) {
      this.topSkills[index].name = v
    },
    skillYearChanged(v, index) {
      this.topSkills[index].year = v
    },

    // Init Work Experience 
    clickAddWork() {
      this.works.push({
        title: '',
        client: '',
        time: '',
        content: ''
      })
    },

    removeWork(index) {
      this.works.splice(index, 1)
    },
    workTitleChanged(v, index) {
      this.works[index].title = v
    },
    workClientChanged(v, index) {
      this.works[index].client = v
    },
    workTimeChanged(v, index) {
      this.works[index].time = v
    },
    workContentChanged(v, index) {
      this.works[index].content = v
    },

    // Init Educations
    clickAddEdu() {
      this.edus.push({
        title: '',
        client: '',
        time: '',
        content: ''
      })
    },

    removeEdu(index) {
      this.edus.splice(index, 1)
    },
    eduTitleChanged(v, index) {
      this.edus[index].title = v
    },
    eduClientChanged(v, index) {
      this.edus[index].client = v
    },
    eduTimeChanged(v, index) {
      this.edus[index].time = v
    },
    eduContentChanged(v, index) {
      this.edus[index].content = v
    },
    
    createResume() {
      let formData = new FormData();

      formData.append("firstname", this.resume.firstname);
      formData.append("lastname", this.resume.lastname);
      formData.append("age", this.resume.age);
      formData.append("email", this.resume.email);
      formData.append("phone", this.resume.phone);
      formData.append("address", this.resume.address);
      formData.append("devType", this.resume.devType);
      formData.append("devDescription", this.resume.devDescription);
      formData.append("skills", JSON.stringify(this.topSkills));
      formData.append("works", JSON.stringify(this.works));
      formData.append("edus", JSON.stringify(this.edus));
      formData.append("avatar", this.resume.avatar);

      this.axios
          .post('http://localhost:8000/api/resume', formData, {
            headers: {
              "Content-Type": "multipart/form-data"
            }
          })
          .then(response => (
              console.log(response.data)

              // this.$router.push({ name: 'home' })
          ))
          .catch(err => console.log(err))
          .finally(() => this.loading = false)
    }
  }
}
</script>