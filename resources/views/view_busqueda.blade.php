@extends('plantilla')

@section('content')
<div id="kit">
    <div class="form-group row">
        <label for="item" class="col-lg-2 col-form-label">Nombre Item</label>
        <div class="col-lg-4">
            <input id="item" type="text" name="item" class="form-control" v-model="texto" v-on:change="getKit">
        </div>
    </div>


    

    <v-app id="inspire">
        <v-data-table
            :headers="headers_item"
            :items="kit"
            :search="search"
            :pagination.sync="pagination"
            hide-actions
            class="elevation-5"
        >
            <template slot="headerCell" slot-scope="props">
            <v-tooltip bottom>
                <span slot="activator">
                @{{ props.header.text }}
                </span>
                <span>
                @{{ props.header.text }}
                </span>
            </v-tooltip>
            </template>
            <template slot="items" slot-scope="props">
            <td width="500px">@{{ props.item.especifica }}</td>
            <td class="text-xs-right">@{{ props.item.pim }} </td>
            <td class="text-xs-right">@{{ props.item.devengado }}</td>
            <td class="text-xs-right">@{{ props.item.saldo }}</td>
            <td class="text-xs-right">@{{ props.item.porcentaje }} %</td>
            </template>
            </v-data-table>
            <div class="text-xs-center pt-2">
                <v-pagination v-model="pagination.page" :length="pages"></v-pagination>
            </div>
        </v-app>


</div>
    
@endsection