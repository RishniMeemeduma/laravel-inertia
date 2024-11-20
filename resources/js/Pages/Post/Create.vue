<script setup>
import {useForm} from '@inertiajs/vue3';
import {onMounted } from 'vue'

const props = defineProps({
    post: {
        type: Object,
        default: null
    },
    isUpdating : {
        type: Boolean,
        default: false
    }
});

const form = useForm({
    title: '',
    body: ''
});

const submit = () => {
    props.isUpdating ? form.put(`/posts/${props.post.id}`) :form.post("/posts");
}

onMounted(() => {
    form.title = props.post.title;
    form.body = props.post.body;
});
</script>

<template>
    <div class="w-full">
        <form @submit.prevent="submit" class="w-full max-w-lg">
             <div class="flex flex-wrap mx-3 mb-6">
            <label for="title" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" >Title</label>
            <input type="text" id="title" v-model="form.title" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
            <label for="body" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" >Body</label>
            <input type="text" name="body" id="body" v-model="form.body" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            <button type="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" >Submit</button>
             </div>
        </form>
    </div>
</template>