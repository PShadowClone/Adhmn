<template>
    <page :title="'landing Page'" :show-footer="false" main-url="landing.list" action-url="'landing.create'">
        <template v-slot:body>
            <form @submit.prevent="submit">
                <div class="kt-section kt-section--first">
                    <div class="form-group">
                        <label>Image</label>
                        <div></div>
                        <div class="custom-file">
                            <input type="file" ref="image" class="custom-file-input" id="customFile"
                                   accept=".png, .jpg, .jpeg"
                                   v-on:change="uploadImage()"
                                   v-validate="'image|dimensions:500,500'"
                            >
                            <label class="custom-file-label" for="customFile">{{form.image != '' ? form.image.name :
                                'Choose file'}}</label>
                        </div>
                        <span class="error-validate"
                              v-if="imageValidation">Image is required</span>

                    </div>
                    <div class="form-group">
                        <label>Title:</label>
                        <input type="text" v-model.trim="form.title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Parent:</label>
                        <select name="" id="" class="form-control" v-model="form.parent_id">
                            <option v-for="(item , index) in options" :value="item.id">
                                {{item.key}}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Content:</label>
                        <textarea class="form-control" v-model.trim="form.content"></textarea>
                    </div>
                </div>
                <div class="kt-portlet__foot" style="padding-left:0">
                    <div class="kt-form__actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <router-link type="reset" class="btn btn-secondary" :to="{name : 'landing.list'}">Cancel
                        </router-link>
                    </div>
                </div>
            </form>
        </template>
    </page>
</template>
<script>
    import page from '../../../components/page'

    import toolbarOptions from '@/plugins/quill'

    export default {
        components: {page},
        data() {
            return {
                form: {
                    key: '',
                    parent_id: 1,
                    content: {
                        ops: [],
                    },
                    image: '',
                    title: ''
                },
                contents: '',
                options: [],
                content: {
                    ops: [],
                },
                config: {
                    placeholder: '',
                    theme: 'snow',
                    modules: {
                        toolbar: toolbarOptions
                    },
                    'syntax': true        // Enable with default configuration
                },
                imageValidation: false,
                requestHeader: {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }
            }
        },
        methods: {
            submit() {
                // console.log(this.)
                let _this = this;
                if (this.form.image == '') {
                    this.imageValidation = true;
                    return
                }
                this.imageValidation = false;
                let formData = new FormData();
                formData.append('content', this.form.content);
                formData.append('title', this.form.title);
                formData.append('parent_id', this.form.parent_id);
                formData.append('key', this.form.key);
                formData.append('image', this.form.image);

                this.request(this.methods.POST, this.endpoints.landing.base, formData, (result) => {
                    if (result.status == 200) {
                        _this.alert('Alert!', 'Data saved successfully')
                        _this.form.key = ''
                        _this.form.content = ''
                        _this.form.image = ''
                        _this.form.parent_id = _this.options.length > 0 ? _this.options[0].id : 0
                        _this.$router.push({name: 'landing.list'}, {
                            alert: {
                                message: 'Data saved successfully',
                                type: 'success'
                            }
                        })
                    }
                })
            },
            fetchParents() {
                this.request(this.methods.GET, this.endpoints.landing.parents, {}, (result) => {
                    console.log('', result)
                    if (result.status == 200) {
                        this.options = result.data;
                        this.parent_id = result.data.length > 0 ? result.data[0].id : 0
                    }
                })
            },
            uploadImage() {
                this.form.image = this.$refs.image.files[0];
                this.imageValidation = false;
            }
        },
        created() {
            this.fetchParents();
            this.form.content = ''
        }
    }
</script>