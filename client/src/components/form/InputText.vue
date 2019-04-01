<template>
    <div class="form-group row">
        <label v-bind:for="fieldName" class="col-sm-2 col-form-label">{{ label }}</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" v-bind:value="data" :placeholder="label" v-on:input="onInput">
        </div>
    </div>
</template>

<script>
/**
 * Handle text, email, password, number form element
 *
 */
/* eslint-disable eqeqeq */
/* eslint-disable semi */

export default {
  name: 'InputText',
  props: ['label', 'value', 'fieldName'],
  data () {
    return {

    }
  },
  created: function () {

  },
  computed: {
    data: function () {
      return this.value;
    }
  },
  methods: {
    // onchange event handler on input field
    onInput: function (event) {
      var dataValue = event.target.value;
      this.$emit('input', dataValue);
    }
  }
}
</script>

<style scoped>
.input-required {
    color: #da6666;
}

.input-changed {
    color: #e8961a;
}

input.form-control.input-error {
    border: 1px solid red;
}

input.form-control {
    height: 37px;
    border-radius: 0px;
    border: 1px solid #607d8b;
}

.form-horizontal .control-label {
    font-weight: 400;
    font-size: 15px;
    text-align: left !important;
}

.required-label {
    color: #ef4444;
    font-size: 16px;
    margin-left: 3px;
}
</style>
