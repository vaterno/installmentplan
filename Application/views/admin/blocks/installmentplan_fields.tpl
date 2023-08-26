[{$smarty.block.parent}]

<tr>
    <td class="edittext">
        [{oxmultilang ident="SHOP_MODULE_installmentplan_prepayment_amount"}]
    </td>
    <td class="edittext">
        <input type="text" class="editinput" maxlength="[{$edit->oxarticles__oxprepaymentamount->fldmax_length}]" name="editval[oxarticles__oxprepaymentamount]" value="[{$edit->oxarticles__oxprepaymentamount->value}]">
    </td>
</tr>

<tr>
    <td class="edittext">
        [{oxmultilang ident="SHOP_MODULE_installmentplan_number_of_installment_months"}]
    </td>
    <td class="edittext">
        <input type="text" class="editinput"  maxlength="[{$edit->oxarticles__oxnumberinstallmentmonths->fldmax_length}]" name="editval[oxarticles__oxnumberinstallmentmonths]" value="[{$edit->oxarticles__oxnumberinstallmentmonths->value}]">
    </td>
</tr>
