<script>
export default {
    name: "ruleMaker",
    computed: {
        derivedRules(){
            let result = {}
            this.schema.fields.forEach(field => {
                if (field.rules) {
                    let correctRules = []
                    field.rules.forEach(rule => {
                        if(rule.type === 'email') correctRules.push(v => /.+@.+\..+/.test(v) || rule.message)
                        if(rule.type === 'required') correctRules.push(v => !!v || rule.message)
                    })
                    result[field.name] = correctRules
                }
            })
            return result
        }
    }
}
</script>

