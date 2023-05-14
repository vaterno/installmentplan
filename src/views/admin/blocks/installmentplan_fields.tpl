[{$smarty.block.parent}]

<tr>
    <td class="edittext">
        [{oxinputhelp ident="SHOP_MODULE_GROUP_installmentplan_prepayment_amount"}]
    </td>
    <td class="edittext">
        <input type="text" class="editinput" size="32" maxlength="[{$edit->oxarticles__oxtitle->fldmax_length}]" name="editval[oxarticles__oxtitle]" value="[{$edit->oxarticles__oxtitle->value}]">
    </td>
</tr>

<tr>
    <td class="edittext">
        [{oxinputhelp ident="SHOP_MODULE_GROUP_installmentplan_number_of_installment_months"}]
    </td>
    <td class="edittext">
        <input type="text" class="editinput" size="32" maxlength="[{$edit->oxarticles__oxtitle->fldmax_length}]" name="editval[oxarticles__oxtitle]" value="[{$edit->oxarticles__oxtitle->value}]">
    </td>
</tr>
