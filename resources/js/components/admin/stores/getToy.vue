<template>

    <div style="width: 1000px;margin:auto " overflow-auto>
        <select type="text" v-model="keySort" @change="getData">
            <option selected>Sort By</option>
            <option value="1">Name A-Z</option>
            <option value="2">Name Z-A</option>
            <option value="3">Cost Low-High</option>
            <option value="4">Cost High-Low</option>
        </select>

        <table>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Cost</th>
                <th> Edit</th>
                <th> Del</th>
            </tr>
            <tr v-for="(toy,index) in toys">
                <td>
                    {{ index + 1 }}
                </td>
                <td>
                    {{ toy.name }}
                </td>
                <td>
                    <img style="width: 50px;height: 50px;border-radius: 50%" :src="toy.image" alt="">
                </td>
                <td>
                    {{ toy.description }}
                </td>
                <td>
                    {{ toy.cost }}.000VND
                </td>
                <td>
                    <el-row>
                        <a :href="'/updateProduct/'+toy.id">
                            <el-button type="primary" icon="el-icon-edit" circle>
                            </el-button>
                        </a>

                    </el-row>
                </td>
                <td>
                    <el-row>
                        <a :href="'/delProduct/'+toy.id">
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
            toys: [],
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
                axios.get('/getToy?page=' + pageNum + '&&key=' + keySort)
                    .then((response) => {
                        console.log(response.data);
                        scop.toys = response.data.data;
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
