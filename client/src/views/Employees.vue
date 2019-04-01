<template>
    <div class="page-view">
        <div class="row page-header">
            <div class="col-sm-12">
                <span class="page-title">Employees</span>
                <a href="#/employees/new" class="btn btn-primary btn-sm pull-right" role="button" aria-disabled="true"><i class="fa fa-plus"></i> Add</a>
            </div>
        </div>

        <div class="row page-content">
            <div class="col-sm-12">
                <table class="table table-striped content-list">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Role</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="employee in employees" :key="employee.id">
                        <td>{{ employee.name }}</td>
                        <td>{{ employee.role }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  name: 'employee',
  data () {
    return {
      employees: []
    }
  },
  created: function () {
      this.getList();
  },
  methods: {
    getList: function() {
      this.$http.get('http://localhost:8000/api/employees')
        .then((response) => {
          if (response && response.data && response.data.data) {
            this.employees = response.data.data;
          }
        })
        .catch((error) => {
          console.log(error);
        });
    }
  }
}
</script>
