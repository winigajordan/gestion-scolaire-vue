

<template>


    <div class="container-fluid">

                    <form class="form-group" id="createLabel" @submit.prevent="save">
                        <label> Libelle </label>
                        <input type="text" class="form-control" required placeholder="Entrez le libelle du niveau" v-model="form.libelle">
                        <button type="submit"   class="btn btn-primary">Mettre a jour </button>
                    </form>
    </div>

</template>

<script setup>

import {ref} from "vue";import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    niveau:Object
})
const form = useForm({
    libelle: props.niveau.libelle,
})

const save = () => {
    form.post(`/niveau/${props.niveau.id}/update`);
}
</script>

