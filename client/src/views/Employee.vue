<template>
    <div class="page-view">
        <div class="row page-header">
            <div class="col-sm-12">
                <span class="page-title">Employees &nbsp;&raquo;&nbsp;  {{ employee.name }}</span>
            </div>
        </div>

        <alert v-if="show" v-bind:type="type" v-bind:message="message"></alert>

        <div class="row page-content">
            <div class="col-sm-8 offset-md-2">
                <form>
                    <input-text label="Name" v-model="employee.name" fieldName="name"></input-text>
                    <input-text label="Role" v-model="employee.role" fieldName="role"></input-text>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-primary pull-right" @click="save"><i class="fa fa-save"></i> Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
/* eslint-disable eqeqeq */
/* eslint-disable semi */
import InputText from '../components/form/InputText.vue'
import alert from '../components/alert/mixin_alert'

export default {
  name: 'employee',
  mixins: [alert],
  data () {
    return {
      employee: {},
      isBtnDisabled: false
    }
  },
  created: function () {
    this.employee = {
      id: 'new',
      name: '',
      role: ''
    };
  },
  methods: {
    save: function () {
      if (this.isBtnDisabled) {
        return;
      }
      this.isBtnDisabled = true;

      this.$http.post('http://localhost:8000/api/employees', {
        data: this.employee
      }).then((response) => {
        this.isBtnDisabled = false;
        this.showAlert('success', 'Employee added successfully');
        setTimeout(() => {
          this.$router.push({ name: 'employees' });
        }, 1000);
      }).catch(() => {
        this.isBtnDisabled = false;
        this.showAlert('warning', 'Something went wrong, Please try again.');
      });
    }
  },
  components: {
    'input-text': InputText
  }
}
</script>
