<template>
  <div class="row">
      <div class="col-md-12">
          <div class="row mt-2">
              <div class="pb-1">Please input your recent education title.</div>
              <div class="col-sm-12 mb-2">
                  <input class="form-control e-title" type="text" name="e_title" required 
                    :value="edu.title"
                    @input="$emit('eduTitleChanged', $event.target.value)">
              </div>
          </div>
            <div class="row mt-2">
              <div class="pb-1">Please input your recent education Client.</div>
              <div class="col-sm-12 mb-2">
                  <input class="form-control e-client" type="text" name="e_client" required 
                    :value="edu.client"
                    @input="$emit('eduClientChanged', $event.target.value)">
              </div>
          </div>
            <div class="row mt-2">
              <div class="pb-1">Please input your recent education timeline.</div>
              <div class="col-sm-12 mb-2">
                  <input class="form-control e-timeline" type="text" name="e_timeline" required 
                    :value="edu.time"
                    @input="$emit('eduTimeChanged', $event.target.value)">
              </div>
          </div>
          <div class="row mt-2">
              <div class="pb-1">Please input your recent education description.</div>
              <div class="col-sm-12 mb-2">
                  <textarea class="form-control e-content" style="resize: none;" name="e_description" rows="4"  placeholder="Text Here..." required 
                    :value="edu.content"
                    @input="$emit('eduContentChanged', $event.target.value)"></textarea>
              </div>
          </div>
          <div class="row mt-2">
              <button class="btn btn-danger remove" @click.prevent="$emit('removeEdu')">
                Remove
              </button>
          </div>
      </div>
  </div>
</template>
<script>

export default {
  props: ['edu'],
}
</script>
