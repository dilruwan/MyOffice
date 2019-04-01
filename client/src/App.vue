<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#/">My Office</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <router-link class="nav-link" to="/">Home <span class="sr-only">(current)</span></router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/employees">Employees</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/aboutus">About Us</router-link>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container" id="app">
      <router-view/>
    </div>
  </div>
</template>

<style lang="scss" src="./assets/scss/styles.scss"></style>

<style lang="scss">
@import '../node_modules/bootstrap/scss/bootstrap.scss';
$fa-font-path: "~font-awesome/fonts/";
@import '../node_modules/font-awesome/scss/font-awesome.scss';

// @import './assets/scss/styles.scss';

#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  .home {
    text-align: center;
  }
}
#nav {
  padding: 30px;
  a {
    font-weight: bold;
    color: #2c3e50;
    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>
