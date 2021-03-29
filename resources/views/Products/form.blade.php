<label for="#id" class="label1">Product ID : </label>    
<input type="number" name="id" class="input ID" id="id" value="{{ old('id') ?? $product->id }}" disabled>
    
<label for="#id" class="label2">Product Name : </label>    
<input type="text" name="name" class="input Name" value="{{ old('name') ?? $product->name }}" required>
<label for="#id" class="label7">Sale Price : </label>    
<input type="number" name="price" class="input Sale" value="{{ old('sale_price') ?? $product->sale_price }}" required>
<select class="select" name="selection">
    <option>AF</option>
    <option disabled>$</option>
    <option disabled>Rupees</option>
    <option disabled>Euro</option>
</select>    
<label for="#id" class="label4">Store Date : </label>    
<input type="date" name="date" class="input Store" value="{{ old('store_date') ?? $product->store_date }}" required> 
<label for="#id" class="label3">Product Amount : </label>    
<input type="number" name="amount" class="input Amount" value="{{ old('amount') ?? $product->amount }}" required>
<label for="#id" class="label6">Product Category : </label>    
<select class="category" name="category">    
    <option {{ $product->category == 'Mobile' ? 'selected' : '' }}>Mobile</option>  
    <option {{ $product->category == 'Computer' ? 'selected' : '' }}>Computer</option>  
    <option {{ $product->category == 'Watch' ? 'selected' : '' }}>Watch</option>  
    <option {{ $product->category == 'Shoe' ? 'selected' : '' }}>Shoe</option>  
    <option {{ $product->category == 'Shirt' ? 'selected' : '' }}>Shirt</option>  
    <option {{ $product->category == 'Trouser' ? 'selected' : '' }}>Trouser</option>  
    <option {{ $product->category == 'Coat' ? 'selected' : '' }}>Coat</option>  
</select> 
<label for="#id" class="label8">Product Size : </label> 
<select class="Size" name="size">
    <option {{ $product->size == 'SM' ? 'selected' : '' }}>SM</option>
    <option {{ $product->size == 'MD' ? 'selected' : '' }}>MD</option>
    <option {{ $product->size == 'LG' ? 'selected' : '' }}>LG</option>
</select>
<label for="#id" class="label5">Minimum Alert : </label>
<input type="number" name="alert" class="input Minimum" value="{{ old('alert') ?? $product->alert }}" required>
  
@csrf