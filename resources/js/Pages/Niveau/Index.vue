

<template>
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> VUE DE NIVEAU</h1>
            </div>

        </div>
    </div>

    <div class="content">
        <div class="container-fluid">

            <div class="row">


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Ajout d'un niveau
                            </div>
                            <div class="card-tools">

                            </div>
                        </div>

                        <div class="card-body p-0">
                            <form class="m-5" @submit.prevent="soumettre">
                                <div class="form-group ">
                                    <label for="libelle">Libelle</label>
                                    <input type="text" class="form-control" v-model="libelleField" id="libelle" placeholder="Entrez le libelle du niveau">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Ajouter</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">

                            </div>
                            <div class="card-tools">
                                <ul class="pagination pagination-sm float-right">
                                    <li class="page-item" v-for="link in props.niveaux.links"><a class="page-link" href="#">{{ link.label }}</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                <tr>

                                    <th>Niveau</th>

                                    <th style="width: 100px">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr  v-for="niv in props.niveaux.data">

                                    <td> {{niv.libelle}} </td>
                                    <td class="d-flex">
                                        <Link class="btn btn-outline-primary mr-4"  :href="route('niveau.edit', niv.id)"><i class="fas fa-pen"></i>  </Link>
                                        <Link class="btn btn-outline-danger"  :href="route('niveau.delete', niv.id)"><i class="fas fa-trash"></i></Link>
                                    </td>

                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</template>

<script setup>

import {ref} from "vue";
import { Link } from '@inertiajs/vue3';
import {Inertia} from "@inertiajs/inertia";

const libelleField = ref('');

const  props = defineProps({
    niveaux:Object
})


const soumettre = () => {
    const nom = libelleField.value;

   Inertia.post('/niveau/store', {libelle:nom})

}

</script>
