<template>
  <div class="row">
      <div class="col-md-12">
          <div class="row mt-2">
              <div class="pb-1">Please input your recent project title.</div>
              <div class="col-sm-12 mb-2">
                  <input class="form-control" type="text" id="p_title" name="p_title" required 
                  :value="work.title"
                  @input="$emit('workTitleChanged', $event.target.value)">
              </div>
          </div>
            <div class="row mt-2">
              <div class="pb-1">Please input your recent project Client.</div>
              <div class="col-sm-12 mb-2">
                  <input class="form-control w-client" type="text" name="p_client" required 
                    :value="work.client"
                    @input="$emit('workClientChanged', $event.target.value)">
              </div>
          </div>
            <div class="row mt-2">
              <div class="pb-1">Please input your recent project timeline.</div>
              <div class="col-sm-12 mb-2">
                  <input class="form-control w-timeline" type="text" name="p_timeline" required 
                    :value="work.time"
                    @input="$emit('workTimeChanged', $event.target.value)">
              </div>
          </div>
          <div class="row mt-2">
              <div class="pb-1">Please input your recent project description.</div>
              <div class="col-sm-12 mb-2">
                  <textarea class="form-control w-content" style="resize: none;" name="p_description" rows="4"  placeholder="Text Here..." required 
                    :value="work.content"
                    @input="$emit('workContentChanged', $event.target.value)"
                  >
                  </textarea>
              </div>
          </div>
          <div class="row mt-2">
              <button class="btn btn-danger remove" @click.prevent="$emit('removeWork')">
                Remove
              </button>
          </div>
      </div>
  </div>
</template>

<script>

export default {
  props: ['work'],
}
</script>
