<!-- BEGIN: main -->
<!-- BEGIN: view -->
<form action="{NV_BASE_SITEURL}index.php?{NV_LANG_VARIABLE}={NV_LANG_DATA}&amp;{NV_NAME_VARIABLE}={MODULE_NAME}&amp;{NV_OP_VARIABLE}={OP}" method="post">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="w100">{LANG.number}</th>
                    <th>{LANG.headbook_name}</th>
                    <th>{LANG.class_id}</th>
                    <th>{LANG.year_id}</th>
                    <th>{LANG.status}</th>
                    <th>{LANG.add_time}</th>
                    <th>{LANG.update_time}</th>
                    <th class="w150">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <!-- BEGIN: loop -->
                <tr>
                    <td> {VIEW.number} </td>
                    <td> {VIEW.headbook_name} </td>
                    <td> {VIEW.class_id} </td>
                    <td> {VIEW.year_id} </td>
                    <td> {VIEW.status} </td>
                    <td> {VIEW.add_time} </td>
                    <td> {VIEW.update_time} </td>
                    <td class="text-center"><i class="fa fa-edit fa-lg">&nbsp;</i> <a href="{VIEW.link_edit}#edit">{LANG.edit}</a> - <em class="fa fa-trash-o fa-lg">&nbsp;</em> <a href="{VIEW.link_delete}" onclick="return confirm(nv_is_del_confirm[0]);">{LANG.delete}</a></td>
                </tr>
                <!-- END: loop -->
            </tbody>
        </table>
    </div>
</form>
<!-- END: view -->

<!-- END: main -->