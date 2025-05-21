@extends('layouts.app')

@section('title', 'Products | Davao Sticker Custom')

@section('content')
<section class="px-4 sm:px-6 md:px-8 py-12">
  <div class="mb-6">
    <h1 class="text-2xl font-bold mb-4">Products</h1>

   <div class="grid grid-cols-1 sm:grid-cols-[1fr_auto] gap-4 sm:items-end">
    <div>
      <label for="category-select" class="text-lg font-medium mb-1 block">
         Select Product Category:
      </label>
         <select id="category-select" class="text-sm text-black px-4 py-2 rounded border border-gray-300 w-full sm:w-64"></select>
    </div>

  <div>
    <button class="bg-white hover:bg-gray-300 text-black font-semibold px-6 py-2 rounded-lg shadow w-full sm:w-auto">
      Add to Cart
    </button>
  </div>
  </div>
  </div>

  <div id="product-container" class="space-y-8"></div>

  <div id="productModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
  <div class="bg-white rounded-lg shadow-lg w-[90%] max-w-md p-6 relative">
    <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-600 hover:text-red-600 text-xl">&times;</button>
    <img id="modalImage" src="" alt="Product" class="w-full h-48 object-cover rounded mb-4" />
    <h2 id="modalName" class="text-xl font-bold mb-2"></h2>
    <p id="modalPrice" class="text-lg text-red-600 mb-4"></p>
    <button class="bg-white hover:bg-gray-300 text-black px-4 py-2 rounded w-full transition duration-200">
      Add to Cart
    </button>
  </div>
</div>
</section>
@endsection


@section('scripts')
<script>
  const categories = [
    {
      title: "Vinyl Stickers",
      products: [
        { name: "Logo Sticker Pack", price: "₱300", image: "hologram sticker.jpg" },
        { name: "Funny Quote Sticker", price: "₱100", image: "fqsticker.webp" },
        { name: "Anime Art Sticker", price: "₱150", image: "aasticker.avif" },
        { name: "Nature Scene Sticker", price: "₱100", image: "nssticker.avif" },
        { name: "Holographic Sticker", price: "₱500", image: "holoGraphicSticker.webp"},
        { name: "Glossy Waterproof Outdoor Sticker", price: "₱250", image: "glossyWaterproof.webp"},
        { name: "WholeSale Holographic Decals", price: "₱500", image: "wholeSale.png"},
        { name: "Pray Before You Ride Sticker", price: "₱50", image: "PBY.png" }
      ]
    },
    {
      title: "Vehicle Decals",
      products: [
        { name: "Racing Stripe Kit", price: "₱150", image: "rskit.avif" },
        { name: "Tribal Flame Decal", price: "₱200", image: "tfdecal.jpg" },
        { name: "Custom Nameplate", price: "₱300", image: "cnameplate.jpg" },
        { name: "Windshield Banner", price: "₱150", image: "wsbanner.webp" },
        { name: "Hologram Visor Stickers", price: "₱60", image: "visorSticker.png" },
        { name: "Motorcycle Visor Sticker Set", price: "₱60", image: "visorStickerSet.png" },
        { name: "Custom Visor Stickers", price: "₱65", image: "visorCustom.png" },
        { name: "Set Stickers Motorcycle Car Stickers Hologram", price: "₱50", image: "motorCarSticker.webp" },
        { name: "Custom Motorcycle Car Stickers", price: "₱60", image: "motorCarCustomSticker.webp" },
        { name: "Scratch Stickers For Motorcycle/Car Windshield", price: "₱200", image: "scratchStickers.webp" }
      ]
    },
    {
      title: "Business Signages",
      products: [
        { name: "Storefront Sign", price: "$150", image: "sfsign.jpeg" },
        { name: "Acrylic Wall Sign", price: "$95", image: "awsign.jpg" },
        { name: "Metal Direction Sign", price: "$130", image: "mdsign.jpg" },
        { name: "Custom Menu Board", price: "$110", image: "cmboard.jpg" }
      ]
    },
    {
      title: "Wall Decals",
      products: [
        { name: "Motivational Quote", price: "$12", image: "wallDmotivQ.jpg" },
        { name: "Kids Room Design", price: "$15", image: "bedroomDecor.jpg" },
        { name: "Nature Mural", price: "$20", image: "natureMural.jpg" },
        { name: "Abstract Art", price: "$22", image: "abstractArt.jpg" }
      ]
    },
    {
      title: "ID Lanyards",
      products: [
        { name: "Custom Text Lanyard", price: "$5", image: "ctlanyard.jpg" },
        { name: "Company Logo Lanyard", price: "$6", image: "cllanyard.jpg" },
        { name: "Badge Holder Combo", price: "$8", image: "bhcombo.jpg" },
        { name: "Breakaway Clip Lanyard", price: "$6.50", image: "bclanyard.jpg" }
      ]
    },
    {
      title: "Custom Keychains",
      products: [
        { name: "Acrylic Tag Keychain", price: "$4", image: "atkeychain.jpg" },
        { name: "Leather Loop Keychain", price: "$6", image: "llkeychain.webp" },
        { name: "Glow-in-the-dark", price: "$5", image: "gdkeychain.webp" },
        { name: "Photo Keychain", price: "$5.50", image: "pkeychain.jpg" },
        { name: "Keyholder Metal Carabiner", price: "₱50", image: "keyholderMetal.png" },
        { name: "King Drag Keyholder", price: "₱50", image: "keyholderKingDrag.webp" },
        { name: "One Garage Keyholder", price: "₱50", image: "keyholderOneGarage.webp" },
        { name: "Monster Keyholder", price: "₱50", image: "keyholderMonster.webp" },
        { name: "JRP Keyholder", price: "₱50", image: "keyholderJRP.webp" },
        { name: "Honda Keyholder", price: "₱50", image: "keyholderHonda.webp" },
        { name: "Suzuki Keyholder", price: "₱50", image: "keyholderSuzuki.webp" },
        { name: "Yamaha Keyholder", price: "₱50", image: "keyholderYamaha.webp" }
      ]
    }
  ];

  const container = document.getElementById('product-container');
  const select = document.getElementById('category-select');

  // Populate dropdown options
  categories.forEach((cat, index) => {
    const option = document.createElement('option');
    option.value = index;
    option.textContent = cat.title;
    select.appendChild(option);
  });

  // Handle category change
  select.addEventListener('change', (e) => {
    renderProducts(e.target.value);
  });

  function renderProducts(categoryIndex) {
    container.innerHTML = "";
    const category = categories[categoryIndex];

    const section = document.createElement('section');
    section.className = "mb-6";

    const productGrid = document.createElement('div');
    productGrid.className = `
      grid 
      grid-cols-1 
      sm:grid-cols-2 
      md:grid-cols-4 
      gap-6
    `;

    category.products.forEach(product => {
       const card = document.createElement('div');
      card.className = `
        bg-white text-black rounded-lg shadow 
        flex flex-col items-center p-2 transition 
        hover:shadow-md hover:scale-[1.02] duration-200 cursor-pointer
      `;

      if (product.name === "Pray Before You Ride Sticker") {
        card.setAttribute("onclick", `openModal("${product.name}", "${product.price}", "${product.image}")`);
      }

      card.innerHTML = `
        <img src="${product.image}" alt="${product.name}" 
            class="w-full h-32 sm:h-36 md:h-40 object-cover rounded mb-2" />
        <div class="text-center w-full">
          <div class="text-sm font-semibold truncate">${product.name}</div>
          <div class="text-xs text-gray-700">${product.price}</div>
        </div>
      `;

  productGrid.appendChild(card);
  });

    section.appendChild(productGrid);
    container.appendChild(section);
  }

  // Initial category render
  renderProducts(0);
  select.value = 0;
</script>
<script>
  function openModal(name, price, image) {
    document.getElementById('modalName').textContent = name;
    document.getElementById('modalPrice').textContent = price;
    document.getElementById('modalImage').src = image;
    document.getElementById('productModal').classList.remove('hidden');
    document.getElementById('productModal').classList.add('flex');
  }

  function closeModal() {
    document.getElementById('productModal').classList.add('hidden');
    document.getElementById('productModal').classList.remove('flex');
  }
</script>
@endsection
