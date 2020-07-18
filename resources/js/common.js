export default {
    data() {
        return {}
    },
    methods: {
        callApi(method,url,data) {
            try {
                axios({
                    method: method,
                    url: url,
                    data: data
                });
            } catch (e) {
                return e.response
            }
        }
    }
}