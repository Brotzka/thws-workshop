<template>
    <div class="alert">
        <button type="button" class="btn btn-primary" @click="alertClick">Alert!</button>
    </div>
</template>

<script>
export default {
    props: {
        message: {
            type: String,
            required: true
        },
        type: {
            type: String,
            default: 'primary',
            validator: (value) => ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'].includes(value)
        }
    },
    methods: {
        alertClick() {
            alert('Alert clicked')
        }
    }
}
</script>