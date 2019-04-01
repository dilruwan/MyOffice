<template>
  <div class="notify-message">
    <div class="alert alert-dismissible fade show" :class="computedClass" role="alert">
      <button type="button" class="close" aria-label="Close" @click="closeAlert"><span aria-hidden="true">&times;</span></button>
      <div v-html="message"></div>
    </div>
  </div>
</template>

<script>
/* eslint-disable eqeqeq */
/* eslint-disable semi */
export default {
  name: 'alert',
  props: ['type', 'message'],
  computed: {
    computedClass: function () {
      return this.type ? 'alert-' + this.type : 'alert-warning';
    }
  },
  methods: {
    closeAlert () {
      if (this.$parent.autoHideTimer != null) {
        clearTimeout(this.$parent.autoHideTimer);
      }
      this.$parent.show = false;
    }
  }
}
</script>

<style scoped>
  .alert {
    position: fixed;
    top: 60px;
    margin: 0 auto;
    left: 15%;
    right: 15%;
    z-index: 1050;
    padding: 10px;
  }

  .alert-dismissible {
    padding-right: 35px;
  }
</style>
