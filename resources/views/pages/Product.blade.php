@extends('layouts.app')

@section('title', 'Products | Davao Sticker Custom')

@section('content')
  <section class="px-4 sm:px-6 md:px-8 py-12">
    <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-6 space-y-4 md:space-y-0">
      <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold">Products</h1>
      <div class="flex flex-wrap items-center gap-3">
        <label for="category-select" class="text-sm sm:text-base md:text-lg">Category:</label>
        <select id="category-select" class="text-black px-4 py-2 rounded w-full sm:w-auto">
          <!-- Options will be populated -->
        </select>
        <button class="bg-white text-black px-6 py-2 rounded hover:bg-gray-300 font-semibold w-full sm:w-auto">
          Add to Cart
        </button>
      </div>
    </div>

    <div id="product-container" class="space-y-8"></div>
  </section>
@endsection

@section('scripts')
<script>
  const categories = [
    {
      title: "Vinyl Stickers",
      products: [
        { name: "Logo Sticker Pack", price: "$5", image: "hologram sticker.jpg" },
        { name: "Funny Quote Sticker", price: "$3", image: "fqsticker.webp" },
        { name: "Anime Art Sticker", price: "$4", image: "aasticker.avif" },
        { name: "Nature Scene Sticker", price: "$4.50", image: "nssticker.avif" }
      ]
    },
    {
      title: "Vehicle Decals",
      products: [
        { name: "Racing Stripe Kit", price: "$25", image: "rskit.avif" },
        { name: "Tribal Flame Decal", price: "$30", image: "tfdecal.jpg" },
        { name: "Custom Nameplate", price: "$20", image: "cnameplate.jpg" },
        { name: "Windshield Banner", price: "$18", image: "wsbanner.webp" }
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
        { name: "Photo Keychain", price: "$5.50", image: "pkeychain.jpg" }
      ]
    }
  ];

  const container = document.getElementById('product-container');
  const dropdown = document.getElementById('category-select');

  function renderProducts(categoryIndex) {
    container.innerHTML = "";
    const category = categories[categoryIndex];
    const section = document.createElement('section');
    section.className = "mb-6";

    const title = document.createElement('h2');
    title.className = "text-xl sm:text-2xl font-semibold mb-4";
    title.textContent = category.title;

    const productGrid = document.createElement('div');
    productGrid.className = `
      grid 
      grid-cols-2 
      sm:grid-cols-3 
      md:grid-cols-4 
      lg:grid-cols-5 
      xl:grid-cols-6 
      gap-x-3 gap-y-4
    `;

    category.products.forEach(product => {
      const card = document.createElement('div');
      card.className = `
        bg-white text-black rounded-lg shadow 
        flex flex-col items-center p-2 transition 
        hover:shadow-md hover:scale-[1.02] duration-200
      `;

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

    section.appendChild(title);
    section.appendChild(productGrid);
    container.appendChild(section);
  }

  categories.forEach((cat, index) => {
    const option = document.createElement('option');
    option.value = index;
    option.textContent = cat.title;
    dropdown.appendChild(option);
  });

  dropdown.addEventListener('change', (e) => {
    renderProducts(e.target.value);
  });

  renderProducts(0);
</script>
@endsection
