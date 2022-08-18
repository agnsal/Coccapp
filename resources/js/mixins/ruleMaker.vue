<script>
export default {
    name: "ruleMaker",
    computed: {
        derivedRules(){
            let result = {}
            this.schema.fields.forEach(field => {
                if (null !== field.rules) {
                    let correctRules = []
                    field.rules.forEach(rule => {
                        if(rule.name === 'regexp') correctRules.push(v => rule.param.test(v) || rule.message)
                    })
                    result[field.name] = correctRules
                }
            })
            return result
        }
    }
}
</script>

