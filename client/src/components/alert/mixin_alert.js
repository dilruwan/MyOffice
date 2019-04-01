/**
 * Mixin for alert
 * Ussage:
 * <script>
 * import alert from '../alert/mixin_alert'
 * ....
 * {
 *   mixins: [alert],
 *   ...
 * }
 *
 * <template>
 *   <alert v-if="show" v-bind:type="type" v-bind:message="message"></alert>
 *
 * Use in the context; TYPE can be success or warning
 *   context.showAlert('<TYPE>', '<MESSAGE>');
 */
/* eslint-disable eqeqeq */
/* eslint-disable semi */
import Alert from './alert.vue'

export default {
  data: function () {
    // Alert properties
    return {
      show: false,
      type: '',
      message: '',
      autoHideTimer: null
    }
  },
  // Initialize alert component
  components: {
    'alert': Alert
  },
  methods: {
    showAlert: function (type, message) {
      if (this.autoHideTimer != null) {
        clearTimeout(this.autoHideTimer);
      }

      this.show = true;
      this.type = type;
      this.message = message;

      var timeout = 4000;
      var messageLength = this.message.length;
      if (messageLength >= 100) {
        timeout = messageLength * 200;
      }

      // close the alert in seconds
      this.autoHideTimer = setTimeout(() => {
        this.show = false;
      }, timeout);
    }
  }
}
