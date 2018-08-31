<template>

	<b-img rounded="circle" blank with="10" height="10" alt="Status" 
		:title="online ? 'Conectado' : 'Desconectado'"
		:blank-color="online ? 'green' : 'gray'" />

</template>

<script>
	export default {
		props: {
			online: Boolean
		},
		data() {
			return {

			};
		},
		mounted() {
		}
	}
</script>