<template>

    <div style="width: 1000px;margin:auto " overflow-auto>
        <select type="text" v-model="keySort" @change="getData">
            <option selected>Sort By</option>
            <option value="1">Name A-Z</option>
            <option value="2">Name Z-A</option>
            <option value="3">Day Of Birth Low-High</option>
            <option value="4">Birth Of Birth High-Low</option>
        </select>

        <table>
            <tr>
                <th>STT</th>
                <th>Full Name</th>
                <th>Avatar</th>
                <th>Day Of Birth</th>
                <th>Email</th>
                <th>Facebook</th>
                <th>Phone Number</th>
                <th>Job</th>
                <th>Gender</th>
                <th>Country</th>
                <th>Status</th>
                <th> Edit</th>
                <th> Del</th>
            </tr>
            <tr v-for="(adminUser,index) in adminUsers">
                <td>
                    {{ index + 1 }}
                </td>
                <td>
                    {{ adminUser.fullName }}
                </td>
                <td>
                    <img style="width: 50px;height: 50px;border-radius: 50%" :src="adminUser.avatar" alt="">
                </td>
                <td>
                    {{ (adminUser.birthday) }}
                </td>
                <td>
                    {{ adminUser.email }}
                </td>
                <td>
                    <a style="color:blue;" target="_blank"  :href="adminUser.facebook " >
                    <span class="d-inline-block text-truncate" style="max-width: 50px;">
                            {{adminUser.facebook}}
                    </span>
                    </a >
                </td>
                <td>
                    {{ adminUser.phoneNumber }}
                </td>
                <td>
                    {{ adminUser.job }}
                </td>
                <td>
                    <span v-if="adminUser.gender = 1">Male</span>
                    <span v-else-if="adminUser.gender = 2">FeMale</span>

                </td>

                <td>
                    {{ adminUser.country }}
                </td>
                <td>
                    <span style="color: green" v-if="adminUser.status=1">Active</span>
                    <span style="color: grey" v-else-if="adminUser.status=2">UnActive</span>
                    <span style="color: red" v-else-if="adminUser.status=3">Lock</span>
                    <span style="color: blue" v-else-if="adminUser.status=4">New</span>

                </td>
                <td>
                    <el-row>
                        <a :href="'/updateUser/'+adminUser.id">
                            <el-button type="primary" icon="el-icon-edit" circle>
                            </el-button>
                        </a>

                    </el-row>
                </td>
                <td>
                    <el-row>
                        <a :href="'/delUser/'+adminUser.id">
                            <el-button type="danger" icon="el-icon-delete" circle
                                       onclick="return confirm('Are you sure?')"></el-button>
                        </a>
                    </el-row>
                </td>
            </tr>
        </table>
        <paginate
            :page-count="pagination.last_page"
            :page-range="1"
            :margin-pages="1"
            :click-handler="getData"
            :prev-text="'Prev'"
            :next-text="' Next '"
            :container-class="'pagination'"
            :page-class="'page-item'">
        </paginate>
    </div>

</template>
<script>
import Paginate from 'vuejs-paginate'

export default {
    components: {
        Paginate
    },
    data: function () {
        return {
            adminUsers: [],
            pagination: {},
            keySort: ''
        }
    },
    created() {
        this.getData(1);
    },

    methods: {
        getData(pageNum = 1, keySort = this.keySort) {
            //load api
            let scop = this;
            try {
                axios.get('/getAdminUser?page=' + pageNum + '&&key=' + keySort)
                    .then((response) => {
                        console.log(response.data);
                        scop.adminUsers = response.data.data;
                        scop.pagination = response.data;
                        scop.keySort = response.data;
                    })
            } catch (error) {
                console.log(error)
            }
            console.log(keySort)
            console.log(pageNum)

        },
    }

}


</script>
<style lang="css">
.pagination {
    font-family: "Nunito", sans-serif;
    margin-top: 50px;
    color: red;
}

.page-item {
    padding: 0 20px 0 20px;
    boder: 1px solid grey;
    border-radius: 50%;
}

</style>
