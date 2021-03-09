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
                                <input class="form-control" type="file" id="avatar" name="avatar" placeholder="Please upload your photo" required >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="d-print-none"/>
            <div class="skills-section px-3 px-lg-4">
                <h2 class="h3 mb-3">Professional Skills</h2>
                <div class="row">
                <div class="col-md-6">
                    <div class="mb-2">
                        <select class="form-control" id="skill_name" name="skill_name" required v-model="resume.skillName">
                            <option>Frontend Developer</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-2">
                        <input class="form-control" type="text" id="skill_year" name="skill_year" placeholder="10" required v-model="resume.skillYear">
                    </div>
                </div>
                </div>
            </div>
            <hr class="d-print-none"/>
            <div class="work-experience-section px-3 px-lg-4">
                <h2 class="h3 mb-4">Work Experience</h2>
                <div class="">
                    <div class="custom-card-primary timeline-card-primary card shadow-sm">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row mt-2">
                                        <div class="pb-1">Please input your recent project title.</div>
                                        <div class="col-sm-12 mb-2">
                                            <input class="form-control" type="text" id="p_title" name="p_title" required v-model="resume.pTitle">
                                        </div>
                                    </div>
                                     <div class="row mt-2">
                                        <div class="pb-1">Please input your recent project Client.</div>
                                        <div class="col-sm-12 mb-2">
                                            <input class="form-control" type="text" id="p_client" name="p_client" required v-model="resume.pClient">
                                        </div>
                                    </div>
                                     <div class="row mt-2">
                                        <div class="pb-1">Please input your recent project timeline.</div>
                                        <div class="col-sm-12 mb-2">
                                            <input class="form-control" type="text" id="p_timeline" name="p_timeline" required v-model="resume.pTimeline">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="pb-1">Please input your recent project description.</div>
                                        <div class="col-sm-12 mb-2">
                                            <textarea class="form-control" style="resize: none;" id="p_description" name="p_description" rows="4"  placeholder="Text Here..." required v-model="resume.pDescription"></textarea>
                                        </div>
                                    </div>
                                     <div class="row jsutify-content-end">
                                        <button class="btn btn-primary mt-2 " type="submit">Add Work</button>
                                    </div>
                                </div>
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row mt-2">
                                        <div class="pb-1">Please input your recent education title.</div>
                                        <div class="col-sm-12 mb-2">
                                            <input class="form-control" type="text" id="e_title" name="e_title" required v-model="resume.eTitle">
                                        </div>
                                    </div>
                                     <div class="row mt-2">
                                        <div class="pb-1">Please input your recent education Client.</div>
                                        <div class="col-sm-12 mb-2">
                                            <input class="form-control" type="text" id="e_client" name="e_client" required v-model="resume.eClient">
                                        </div>
                                    </div>
                                     <div class="row mt-2">
                                        <div class="pb-1">Please input your recent education timeline.</div>
                                        <div class="col-sm-12 mb-2">
                                            <input class="form-control" type="text" id="e_timeline" name="e_timeline" required v-model="resume.eTimeline">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="pb-1">Please input your recent education description.</div>
                                        <div class="col-sm-12 mb-2">
                                            <textarea class="form-control" style="resize: none;" id="e_description" name="e_description" rows="4"  placeholder="Text Here..." required v-model="resume.eDescription"></textarea>
                                        </div>
                                    </div>
                                     <div class="row jsutify-content-end">
                                        <button class="btn btn-success mt-2 " type="button">Add Education</button>
                                    </div>
                                </div>
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

    export default {
        
        data() {
            return {
                resume: {},
            }
        },
        methods: {
            
            createResume() {
                this.axios
                    .post('http://localhost:8000/api/resume', this.resume)
                    .then(response => (
                        this.$router.push({ name: 'home' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>