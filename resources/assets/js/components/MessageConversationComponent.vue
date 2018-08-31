<template>

	<b-media :right-align="writtenByMe" vertical-align="center" class="mb-2">

		<b-img :src="image" rounded="circle" slot="aside" with="48" height="48" />

		<b-card>
			<slot></slot>
		</b-card>
	</b-media>

</template>

<script>
    export default {
    	props: {
            image: String,
    		writtenByMe: Boolean
    	},
        data(){
            return {
            };
        },
        mounted() {
            // console.log('Component mounted.')
        }
    }
</script>