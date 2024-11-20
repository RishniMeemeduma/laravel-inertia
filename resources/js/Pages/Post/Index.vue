<script setup>
import {Link, useForm} from '@inertiajs/vue3';

defineProps({
    posts: {
        type: Array,
        default: () => []
    }
});

const headers = ['posts', 'body', 'actions'];

let form = useForm({});

const deletePosts = (id) => {
    form.delete(`posts/${id}`);
}
</script>

<template>
    <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50">
        <h1 class="text-center text-black text-3xl ">My Inertia CRUD</h1>
        <Link href="posts/create" class="flex justify-end">
        <label class="text-center bg-green-500 p-3">Create new post</label>
        </Link>
        <table class="table-auto">
            <thead>
                <tr>
                    <th v-for="header in headers" :key="header">
                        {{header}}
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="post in posts" :key="post.id">
                    <td>
                        {{ post.title}}
                    </td>
                    <td>
                        {{ post.body}}
                    </td>
                    <td>
                        <Link :href="`posts/${post.id}/edit`">Edit</Link>
                        <button @click="deletePosts(post.id)">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>