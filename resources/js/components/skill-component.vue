<template>
<div class="row">
  <div class="col-md-6">
      <div class="mb-2">
          <select class="form-control" id="skill_name" name="skill_name" 
            :value="skill.name"
            @input="$emit('nameChanged', $event.target.value)">
              <option disabled>Select your skill</option>
              <option v-for="skill in skillCategries" :key="skill.name">{{skill.name}}</option>
          </select>
      </div>
  </div>
  <div class="col-md-4">
      <div class="mb-2">
          <input class="form-control" type="text" id="skill_year" name="skill_year" placeholder="10" required 
          :value="skill.year" 
          @input="$emit('yearChanged', $event.target.value)">
      </div>
  </div>
  <div class="col-md-2">
      <div class="mb-2 text-right">
          <button class="btn btn-danger remove" @click.prevent="$emit('remove')">
            Remove
          </button>
      </div>
  </div>
</div>

</template>

<script>
import skillJson from "../data/skills.json";

export default {
  data() {
    return {
      skillCategries: []
    }
  },
  props: ['skill'],
  mounted() {
    var vm = this;
    vm.skillCategries = skillJson;
  },
}
</script>
