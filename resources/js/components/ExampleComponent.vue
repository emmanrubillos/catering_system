<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <input type="text" ref="dateRangePickerInput" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import DateRangePicker from 'flowbite-datepicker/DateRangePicker';

export default {
    mounted() {
        // Initialize DateRangePicker
        new DateRangePicker(this.$refs.dateRangePickerInput);
    }
}
</script>
