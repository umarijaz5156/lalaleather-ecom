<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Variant;
use Livewire\Component;
use App\Models\Zone;
use App\Models\Size;;

use App\Models\VariantOption as Options;





class Others extends Component
{
    public $product,$allData, $quantity,$previousStep = false , $moq, $zones, $variantsOptionsData,$shippingMethods, $sizesData, $variantsData, $sizeChart, $i = 1, $inputs = [], $faqs = [], $question, $answer, $x = 2, $ftInputs = [], $features = [], $ftuirement, $options = [], $y = 0, $szInputs, $shippingZones, $sizes = [], $size, $size_chart_id, $shipping_cost_id, $is_active = 1, $is_promoted = 0, $z = 0, $variantInputs = [], $variants = [], $isCustom;

    protected function rules()
    {
        // $this->shippingZones = array_intersect_key($this->shippingZones, array_flip($this->szInputs));
        // dd($this->shippingZones,$this->szInputs);
        $maxQuantity = $this->isCustom ? '' : '|max:'.$this->quantity;
        
        // Define rules for the main attributes
        $rules = [
            'quantity' => 'nullable|required_if:isCustom,0|numeric',
            'moq' => 'required|numeric|min:1'.$maxQuantity,
            'sizeChart' => 'required|numeric|max:255',
            'features.*' => 'required|string|max:150',
        ];
    
        // Custom validation for shippingZones
        $shippingZoneRules = [];
        foreach ($this->shippingZones ?? [] as $key => $value) {
            // Check if any of the fields (zone, cost, shipping_method, delivery_time) is not empty
            $anyNotEmpty = !empty($value['zone']) || !empty($value['cost']) || !empty($value['shipping_method']) || !empty($value['delivery_time']);

            // If any of the fields is not empty, make all other fields required
            $requiredRule = $anyNotEmpty ? 'required|numeric|min:0|max:9999999' : 'nullable';

            // zone
            $shippingZoneRules["shippingZones.{$key}.zone"] = $requiredRule;

            // cost
            $shippingZoneRules["shippingZones.{$key}.cost"] = $requiredRule;

            // shipping_method
            $shippingZoneRules["shippingZones.{$key}.shipping_method"] = $requiredRule;

            // delivery_time
            $shippingZoneRules["shippingZones.{$key}.delivery_time"] = $requiredRule;
        }

        // Ensure at least one shipping zone is required
        // $rules['shippingZones'] = 'required|array|min:1';

        // Merge the shipping zone rules with existing rules
        $rules = array_merge($rules, $shippingZoneRules);

    
      // Custom validation for variants
        foreach ($this->variants as $key => $value) {
            // Check if any of the fields (variant_id, cost, variant_option_id) is not empty
            $anyNotEmpty = !empty($value['variant_id']) || !empty($value['cost']) || !empty($value['variant_option_id']);

            // If any of the fields is not empty, make all other fields required
            $requiredRule = $anyNotEmpty ? 'required|numeric|min:0|max:9999999' : 'nullable';

            // variant_id
            $rules["variants.{$key}.variant_id"] = $requiredRule;

            // cost
            $rules["variants.{$key}.cost"] = $requiredRule;

            // variant_option_id
            $rules["variants.{$key}.variant_option_id"] = $requiredRule;
        }

        // Custom validation for FAQs
        foreach ($this->faqs as $key => $value) {
            $rules["faqs.{$key}.question"] = $value['answer'] ?? null ? 'required|string|max:150' : 'nullable|string|max:150';
            $rules["faqs.{$key}.answer"] = $value['question'] ?? null ? 'required|string|max:250' : 'nullable|string|max:250';
        }
    
        return $rules;
    }   
    // $message
    protected $messages = [
        'quantity.required_if' => 'The quantity field is required when the product is not custom.',
        'quantity.numeric' => 'The quantity field must be numeric.',
        'sizeChart.required' => 'The size chart field is required.',
        'sizeChart.string' => 'The size chart field must be a string.',
        'sizeChart.max' => 'The size chart field must be a maximum of 255 characters.',
        'features.*.required' => 'The feature field is required.',
        'features.*.string' => 'The feature field must be a string.',
        'features.*.max' => 'The feature field must be a maximum of 150 characters.',
        'shippingZones.*.zone.required' => 'The zone is required.',
        'shippingZones.*.zone.string' => 'The zone field must be a string.',
        'shippingZones.*.zone.max' => 'The zone field must be a maximum of 255 characters.',
        'shippingZones.*.zone.numeric' => 'The zone field must be numeric.',
        'shippingZones.*.cost.required' => 'The cost field is required.',
        'shippingZones.*.cost.numeric' => 'The cost field must be numeric.',
        'shippingZones.*.cost.min' => 'The cost field must be at least 0.',
        'shippingZones.*.cost.max' => 'The cost field must be less than 9999999.',
        'shippingZones.*.shipping_method.required' => 'The shipping method field is required.',
        'shippingZones.*.delivery_time.required' => 'The delivery time field is required.',
        'variants.*.variant_id.required' => 'The variant field is required.',
        'variants.*.variant_id.string' => 'The variant field must be a string.',
        'variants.*.variant_id.max' => 'The variant field must be a maximum of 255 characters.',
        'variants.*.cost.required' => 'The cost field is required.',
        'variants.*.cost.numeric' => 'The cost field must be numeric.',
        'variants.*.cost.min' => 'The cost field must be at least 0.',
        'variants.*.cost.max' => 'The cost field must be less than 9999999.',
        'variants.*.variant_option_id.required' => 'The variant option field is required.',
        'faqs.*.question.required' => 'The question field is required.',
        'faqs.*.question.string' => 'The question field must be a string.',
        'faqs.*.question.max' => 'The question field must be a maximum of 150 characters.',
        'faqs.*.answer.required' => 'The answer field is required.',
        'faqs.*.answer.string' => 'The answer field must be a string.',
        'faqs.*.answer.max' => 'The answer field must be a maximum of 250 characters.',
    ];
    
    // mount
    public function mount($product, $isCustom, $allData)
    {
        // dd($product, $isCustom, $allData);
        $this->isCustom = $isCustom;
        $this->product = $product;
        if ($this->product && !isset($allData['previousStep'])) {
            // Process product data
            $this->processProductData();
        } elseif($allData) {
            $this->allData = $allData;
            // Process product data
            $this->processAllData($allData);
        } else {
            // Initialize default values
            $this->initializeDefaultValues();
        }

        $this->zones = Zone::where('status', 1)->get();
        // $variantsData
        $this->variantsData = Variant::get();
        // Sizes
        $this->sizesData = Size::all();
    }
    private function processProductData()
    {
        $this->quantity = $this->product->quantity;
        $this->moq = $this->product->moq;
        $this->sizeChart = $this->product->size_chart_id;

        // Process other product data...

        // Example: Features
        $this->processProductFeatures();

        // Example: Shipping Costs
        $this->processProductShippingCosts();

        // Example: Variants
        $this->processProductVariants();

        // Example: FAQs
        $this->processProductFAQs();
    }
    // processAllData
    private function processAllData($allData)
    {
        $this->quantity = $allData['quantity'] ?? 0;
        $this->moq = $allData['moq'] ?? 0;
        $this->sizeChart = $allData['sizeChart'] ?? '';
        // Promoted
        $this->is_promoted = $allData['is_promoted'] ?? 0;
        $this->is_active = $allData['is_active'] ?? 1;

        // Process other product data...

        // Example: Features
        if (isset($allData['features'])) {
            foreach ($allData['features'] as $key => $feature) {
                $this->ftInputs[] = $key;
                $this->features[$key] = $feature;
            }
        }else{
            $this->ftInputs[] = 0;
            $this->features[0] = '100% pure leather';
        }

        // Example: Shipping Costs
        if (isset($allData['shippingZones'])) {
            foreach ($allData['shippingZones'] as $key => $shippingCost) {
                $this->szInputs[] = $key;
                $this->shippingZones[$key] = collect($shippingCost)->only(['zone', 'cost', 'shipping_method', 'delivery_time'])->toArray();
            }
        }

        // Example: Variants
        if (isset($allData['variants'])) {
            foreach ($allData['variants'] as $key => $variant) {
                $this->variantInputs[] = $key;
                $this->variants[$key] = ['variant_id' => $variant['variant_id'] ?? '', 'cost' => $variant['cost'] ?? 0,'variant_option_id'=>$variant['variant_option_id'] ?? ''];
            }
        }else{

            $this->variantInputs[] = 0;
            $this->variants[0] = ['variant_id' => '', 'cost' => '0'];
        }

        // Example: FAQs
        if (isset($allData['faqs'])) {
            // dd($allData['faqs']);
            foreach ($allData['faqs'] as $key => $faq) {
                $this->inputs[] = $key;
                $this->faqs[$key] = ['question' => $faq['question'], 'answer' => $faq['answer']];
            }
        }else{
            $this->inputs[] = 0;
            $this->faqs[0] = ['question' => '', 'answer' => ''];
        }

    }
   
    // processProductFeatures
    private function processProductFeatures()
    {
        if (isset($this->product->features)) {
            foreach ($this->product->features as $key => $feature) {
                $this->ftInputs[] = $key;
                $this->features[$key] = $feature->feature;
            }
        }
    }
    // processProductShippingCosts
    private function processProductShippingCosts()
    {
        if (isset($this->product->shippingCosts)) {
            foreach ($this->product->shippingCosts as $key => $shippingCost) {
                $this->szInputs[] = $key;
                $this->shippingZones[$key] = ['zone' => $shippingCost->zone_id, 'cost' => $shippingCost->cost,'shipping_method' => $shippingCost->shipping_method,'delivery_time' => $shippingCost->delivery_time];
            }
        }
    }
    // processProductVariants
    private function processProductVariants()
    {
        if (isset($this->product->variants)) {
            foreach ($this->product->variants as $key => $variant) {
                $this->variantInputs[] = $key;
                $this->variants[$key] = ['variant_id' => $variant->variant_id, 'cost' => $variant->cost,'variant_option_id'=>$variant->variant_option_id];
            }
        }
    }
    // processProductFAQs
    private function processProductFAQs()
    {
        if (isset($this->product->faqs)) {
            foreach ($this->product->faqs as $key => $faq) {
                $this->inputs[] = $key;
                $this->faqs[$key] = ['question' => $faq->question, 'answer' => $faq->answer];
            }
        }
    }
    // initializeDefaultValues
    private function initializeDefaultValues()
    {
        $this->ftInputs[] = 0;
        $this->szInputs[] = 0;
        $this->variantInputs[] = 0;
        $this->variants[0] = ['variant_id' => '', 'cost' => '0'];
        $this->features[0] = '100% pure leather';
    }
    public function render()
    {

        foreach ($this->variants as $key => $value) {
            $this->variantsOptionsData[$key] =  Variant::find($value['variant_id'])?->options ?? array();
        }
        // $this->shippingZones => shippingMethods
        foreach ($this->shippingZones ?? [] as $key => $value) {
            $zoneId = $value['zone'] ?? null;
            $this->shippingMethods[$key] = Zone::find($zoneId)->shippingMethods ?? [];
        }
        
        // dd($this->shippingMethods);
        
        return view('livewire.admin.products.others');
    }

    public function previous()
    {
        $this->previousStep =true;
        unset($this->allData['allData']);
        $this->allData = array_merge($this->allData ?? [], $this->all());
        $this->emit('previousStep', $this->allData );
    }
    public function add($i)
    {
        if ($i < 5) {
            $i = $i + 1;
            $this->i = $i;
            array_push($this->inputs, $i);
        } else {
            $this->addError('faq', 'Max 5 faqs allowed');
        }
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
        unset($this->faqs[$i]);
    }

    public function resetInputFields()
    {
        $this->answer = '';
        $this->question = '';
    }
    // add dynamic requiremnts
    public function addFt($x)
    {
        if ($x < 15) {
            $x = $x + 1;
            $this->x = $x;
            array_push($this->ftInputs, $x);
            $this->options[$x] = 'text';
        } else {
            $this->addError('feature', 'Max 15 question allowed');
        }
    }

    public function removeFt($x)
    {
        unset($this->ftInputs[$x]);
        unset($this->features[$x]);
        $this->x -= 1;
    }

    public function resetFtInput()
    {
        $this->reset('feature');
    }
    // szInputs
    public function addShippingZone($key)
    {
        $this->y++;
        is_array($this->szInputs) ? array_push($this->szInputs, $this->y): $this->szInputs = [$key];         
        $this->shippingZones[] = ['zone' => '', 'cost' => ''];
    }

    public function removeShippingZone($key)
    {
        // dd($this->szInputs,$this->shippingZones,$key);
        unset($this->szInputs[$key]);
        unset($this->shippingZones[$key]);
        // $this->szInputs = array_values($this->szInputs);
        // $this->shippingZones = array_values($this->shippingZones);
    }
    public function addVariant($key)
    {
        $this->z++;
        array_push($this->variantInputs, $this->z);
        $this->variants[] = ['variant_id' => '', 'cost' => 0.00];
    }

    public function removeVariant($key)
    {
        unset($this->variantInputs[$key]);
        unset($this->variants[$key]);
        // $this->variantInputs = array_values($this->variantInputs);
        // $this->variants = array_values($this->variants);
    }

    public function next()
    {
        // dd($this->all());
        $this->validate();
        unset($this->allData['allData']);
        $this->allData = array_merge($this->allData ?? [], $this->all());
        $this->emit('nextStep',$this->allData);
    }


}