// Script for navigation bar
const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if(bar){
    bar.addEventListener('click',()=> {
        nav.classList.add('active');
    })
}

if(close){
    close.addEventListener('click', ()=> {
        nav.classList.remove('active');
    })
}

//build a box
          const bundle = {
             productsSection: [],
             addedProducts: []
           };
           bundle.currentSectionIndex = 0;
    
          
            bundle.productsSection[0] = {
              soldOut: true,
              price: 1700,
              tags: 'allergens::Gluten Free,BaB,Badge::AAPI Owned,Birthday,Birthday + Congrats,brand-values::AAPI Owned,brand-values::Made in the USA,brand-values::Sustainable,brand-values::Women Owned,BUILD A BOX,for::Her,highlights::Small Batch,highlights::Sustainable,highlights::Women Owned,Low stock,occasion::Birthday,occasion::Just Because,occasion::Thinking Of You,Tea & Coffee,Thank You,type::Coffee & Teas,Woman Owned,zest-gift'.split(','),
              variantId: 40857847103681,
            }
          
            bundle.productsSection[1] = {
              soldOut: false,
              price: 2400,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Birthday,brand-values::Made in the USA,BUILD A BOX,for::Her,Get Well Soon,highlights::Handmade,highlights::Made in the USA,highlights::Sustainable,Low stock,New Baby,occasion::Birthday,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Sympathy,type::Bath & Body,zest-gift'.split(','),
              variantId: 40071743242433,
            }
          
            bundle.productsSection[2] = {
              soldOut: false,
              price: 700,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::AAPI Owned,Birthday,Birthday + Congrats,brand-values::AAPI Owned,BUILD A BOX,for::Her,highlights::Cruelty Free,New Baby,occasion::Birthday,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self-Care,Thank You,type::Bath & Body,zest-gift'.split(','),
              variantId: 39919579824321,
            }
          
            bundle.productsSection[3] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,allergens::Vegan,BaB,Badge::Women Owned,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,Get Well Soon,highlights::Organic,highlights::Small Batch,highlights::Women Owned,Low stock,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Tea + Coffee,type::Coffee & Teas,zest-gift'.split(','),
              variantId: 43178589323517,
            }
          
            bundle.productsSection[4] = {
              soldOut: false,
              price: 800,
              tags: 'allergens::Gluten Free,BaB,Birthday,Birthday + Congrats,brand-values::Made in the USA,BUILD A BOX,for::Her,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self-Care,Sweets,Sweets & Treats,Sympathy,Thank You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 42662863110397,
            }
          
            bundle.productsSection[5] = {
              soldOut: true,
              price: 800,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Handmade,brand-values::Made in the USA,brand-values::Sustainable,brand-values::Women Owned,BUILD A BOX,for::Her,highlights::Handmade,highlights::Sustainable,highlights::Women Owned,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,type::Bath & Body,zest-gift'.split(','),
              variantId: 43892952563965,
            }
          
            bundle.productsSection[6] = {
              soldOut: false,
              price: 600,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::LGBTQ+ Owned,Birthday,brand-values::Made in the USA,brand-values::Sustainable,BUILD A BOX,for::All,for::Her,Get Well Soon,highlights::Family Owned,highlights::Handmade,highlights::Small Batch,Low stock,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Self Care,Self Care,Sympathy,type::Bath & Body,zest-gift'.split(','),
              variantId: 40772132274369,
            }
          
            bundle.productsSection[7] = {
              soldOut: false,
              price: 500,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::AAPI Owned,Birthday,Birthday + Congrats,brand-values::AAPI Owned,brand-values::Women Owned,BUILD A BOX,for::Her,Get Well Soon,highlights::Cruelty Free,highlights::Eco Friendly,highlights::Women Owned,Just Because,Low stock,occasion::Birthday,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Sympathy,Thank You,type::Bath & Body,zest-gift'.split(','),
              variantId: 40002167996609,
            }
          
            bundle.productsSection[8] = {
              soldOut: false,
              price: 500,
              tags: 'allergens::Gluten Free,BaB,Badge::Organic,Birthday,brand-values::,brand-values::Made in the USA,brand-values::Sustainable,BUILD A BOX,for::Her,Get Well Soon,highlights::Family Owned,highlights::Organic,highlights::Small Batch,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Sympathy,Tea & Coffee,type::Coffee & Teas,zest-gift'.split(','),
              variantId: 40091845492929,
            }
          
            bundle.productsSection[9] = {
              soldOut: false,
              price: 800,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Women Owned,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::Her,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,Low stock,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self-Care,type::Bath & Body,zest-gift'.split(','),
              variantId: 40884632322241,
            }
          
            bundle.productsSection[10] = {
              soldOut: false,
              price: 1400,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Handmade,brand-values::Made in the USA,brand-values::Sustainable,brand-values::Women Owned,BUILD A BOX,for::Her,highlights::Handmade,highlights::Sustainable,highlights::Women Owned,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,type::Bath & Body,zest-gift'.split(','),
              variantId: 42517175042301,
            }
          
            bundle.productsSection[11] = {
              soldOut: false,
              price: 700,
              tags: 'BaB,Birthday,Birthday + Congrats,brand-values::Made in the USA,BUILD A BOX,for::All,for::Her,highlights::Handmade,highlights::Made in the USA,highlights::Small Batch,Just Because,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Sweets,Sweets & Treats,Sympathy,Thank You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 40772124147905,
            }
          
            bundle.productsSection[12] = {
              soldOut: false,
              price: 800,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Handmade,Birthday,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,Just Because,Low stock,New Baby,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Thank You,type::Bath & Body,zest-gift'.split(','),
              variantId: 43178834559229,
            }
          
            bundle.productsSection[13] = {
              soldOut: false,
              price: 500,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::AAPI Owned,Birthday,Birthday + Congrats,brand-values::AAPI Owned,brand-values::Eco Friendly,brand-values::Women Owned,BUILD A BOX,For Her,for::All,highlights::Cruelty Free,highlights::Eco Friendly,highlights::Women Owned,Just Because,Low stock,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Thank You,type::Bath & Body,zest-gift'.split(','),
              variantId: 40002167800001,
            }
          
            bundle.productsSection[14] = {
              soldOut: false,
              price: 800,
              tags: 'allergens::Kosher,BaB,Badge::Women Owned,Birthday,Birthday + Congrats,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Sweets,Sweets & Treats,Sympathy,Thank You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 42750207394045,
            }
          
            bundle.productsSection[15] = {
              soldOut: false,
              price: 1800,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Women Owned,Birthday,BUILD A BOX,for::All,for::Her,Get Well Soon,highlights::Women Owned,Just Because,New Baby BaB,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self-Care,Thank You,type::Bath & Body,Woman Owned,zest-gift'.split(','),
              variantId: 40173265748161,
            }
          
            bundle.productsSection[16] = {
              soldOut: false,
              price: 800,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Handmade,Birthday,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,Get Well Soon,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,Just Because,Low stock,New Baby,occasion::Birthday,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Thank You,type::Bath & Body,zest-gift'.split(','),
              variantId: 40002168455361,
            }
          
            bundle.productsSection[17] = {
              soldOut: false,
              price: 400,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,brand-values::Women Owned,BUILD A BOX,for::Her,highlights::Women Owned,occasion::Birthday,occasion::Just Because,occasion::Thinking Of You,type::Socks & Accessories,zest-gift'.split(','),
              variantId: 43085016826109,
            }
          
            bundle.productsSection[18] = {
              soldOut: false,
              price: 1600,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Birthday,BUILD A BOX,for::All,for::Her,Low stock,occasion::Birthday,occasion::Just Because,occasion::Thinking Of You,Self Care,Sympathy,type::Journals,zest-gift'.split(','),
              variantId: 40071739932865,
            }
          
            bundle.productsSection[19] = {
              soldOut: true,
              price: 2200,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Women Owned,Birthday,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,highlights::Women Owned,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Thank You,type::Journals,zest-gift'.split(','),
              variantId: 42103890051325,
            }
          
            bundle.productsSection[20] = {
              soldOut: false,
              price: 500,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,highlights::Women Owned,Just Because,Low stock,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Thank You,type::Journals,Woman Owned,zest-gift'.split(','),
              variantId: 40071744553153,
            }
          
            bundle.productsSection[21] = {
              soldOut: false,
              price: 2000,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,brand-values::Made in the USA,BUILD A BOX,for::All,for::Her,highlights::Handmade,highlights::Made in the USA,highlights::Sustainable,Low stock,New Baby,New Baby BaB,occasion::Corporate Gifting,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,type::Bath & Body,zest-gift'.split(','),
              variantId: 42568978235645,
            }
          
            bundle.productsSection[22] = {
              soldOut: false,
              price: 1400,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Organic,brand-values::Made in the USA,brand-values::Sustainable,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Organic,highlights::Small Batch,highlights::Sustainable,Low stock,New Baby,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Tea & Coffee,Thank You,type::Coffee & Teas,zest-gift'.split(','),
              variantId: 40002169995457,
            }
          
            bundle.productsSection[23] = {
              soldOut: false,
              price: 1600,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,BUILD A BOX,for::Her,Low stock,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self-Care,type::Journals,zest-gift'.split(','),
              variantId: 42740965736701,
            }
          
            bundle.productsSection[24] = {
              soldOut: false,
              price: 900,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Handmade,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::Her,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,Low stock,occasion::Birthday,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,type::Bath & Body,zest-gift'.split(','),
              variantId: 42780834660605,
            }
          
            bundle.productsSection[25] = {
              soldOut: false,
              price: 800,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Women Owned,Birthday,brand-values::Eco Friendly,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::Her,Get Well Soon,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,occasion::Birthday,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Sympathy,Thank You,Woman Owned,zest-gift'.split(','),
              variantId: 40071743832257,
            }
          
            bundle.productsSection[26] = {
              soldOut: false,
              price: 1200,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Women Owned,Birthday,BUILD A BOX,for::Her,highlights::Women Owned,Just Because,Low stock,occasion::Birthday,occasion::Congrats,occasion::Just Because,occasion::Thinking Of You,Thank You,type::Socks & Accessories,Woman-owned,zest-gift'.split(','),
              variantId: 42457970508029,
            }
          
            bundle.productsSection[27] = {
              soldOut: true,
              price: 1200,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Women Owned,brand-values::Made in the USA,brand-values::Sustainable,brand-values::Women Owned,for::Her,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self-Care,type::Bath & Body,Woman-owned,zest-gift'.split(','),
              variantId: 43488129384701,
            }
          
            bundle.productsSection[28] = {
              soldOut: false,
              price: 1600,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Handmade,Birthday + Congrats,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::Her,Get Well Soon,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,Just Because,Low stock,New Baby,New Baby BaB,occasion::Birthday,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Thank You,type::Bath & Body,zest-gift'.split(','),
              variantId: 40002168783041,
            }
          
            bundle.productsSection[29] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Cruelty Free,Birthday,BUILD A BOX,for::Her,highlights::Cruelty Free,highlights::Handmade,highlights::Women Owned,occasion::Birthday,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,type::Bath & Body,Woman Owned,zest-gift'.split(','),
              variantId: 40710082396353,
            }
          
            bundle.productsSection[30] = {
              soldOut: false,
              price: 1100,
              tags: 'BaB,Birthday,Birthday + Congrats,BUILD A BOX,for::All,for::Her,for::Him,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Sweets,Sweets & Treats,Sympathy,Thank You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 42673269375229,
            }
          
            bundle.productsSection[31] = {
              soldOut: false,
              price: 700,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::AAPI Owned,Birthday,brand-values::AAPI Owned,BUILD A BOX,for::All,for::Her,for::Him,highlights::Cruelty Free,occasion::Birthday,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Sympathy,type::Bath & Body,zest-gift'.split(','),
              variantId: 40693104541889,
            }
          
            bundle.productsSection[32] = {
              soldOut: false,
              price: 1200,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,brand-values::Made in the USA,brand-values::Sustainable,BUILD A BOX,for::All,for::Her,for::Him,highlights::Made in the USA,highlights::Small Batch,highlights::Sustainable,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Tea & Coffee,type::Coffee & Teas,zest-gift'.split(','),
              variantId: 42662923665661,
            }
          
            bundle.productsSection[33] = {
              soldOut: false,
              price: 800,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::AAPI Owned,brand-values::AAPI Owned,brand-values::Sustainable,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,highlights::Cruelty Free,highlights::Women Owned,Low stock,occasion::Birthday,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self-Care,type::Bath & Body,zest-gift'.split(','),
              variantId: 42662874841341,
            }
          
            bundle.productsSection[34] = {
              soldOut: false,
              price: 600,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Birthday + Congrats,brand-values::Made in the USA,brand-values::Sustainable,brand-values::Women Owned,BUILD A BOX,for::Her,highlights::Made in the USA,highlights::Sustainable,highlights::Women Owned,Low stock,occasion::Birthday,occasion::Congrats,occasion::Just Because,type::Bath & Body,Woman Owned,zest-gift'.split(','),
              variantId: 40002172518593,
            }
          
            bundle.productsSection[35] = {
              soldOut: false,
              price: 400,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,brand-values::Women Owned,BUILD A BOX,for::Her,highlights::Women Owned,occasion::Birthday,occasion::Just Because,occasion::Thinking Of You,type::Socks & Accessories,zest-gift'.split(','),
              variantId: 43085016793341,
            }
          
            bundle.productsSection[36] = {
              soldOut: false,
              price: 700,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::AAPI Owned,Birthday,Birthday + Congrats,brand-values::AAPI Owned,BUILD A BOX,for::All,for::Her,highlights::Cruelty Free,Low stock,New Baby,occasion::Birthday,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,type::Bath & Body,zest-gift'.split(','),
              variantId: 39919569830081,
            }
          
            bundle.productsSection[37] = {
              soldOut: false,
              price: 2400,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Birthday,brand-values::Made in the USA,BUILD A BOX,for::Her,Get Well Soon,highlights::Handmade,highlights::Made in the USA,highlights::Sustainable,Low stock,occasion::Birthday,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Sympathy,type::Bath & Body,zest-gift'.split(','),
              variantId: 40071743111361,
            }
          
            bundle.productsSection[38] = {
              soldOut: false,
              price: 2500,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Birthday,brand-values::Sustainable,BUILD A BOX,for::Her,Get Well Soon,Just Because,occasion::Birthday,occasion::Congrats,occasion::Get Well Soon,occasion::Just Because,occasion::Thinking Of You,Self Care,Thank You,type::Drinkware,zest-gift'.split(','),
              variantId: 40071744618689,
            }
          
            bundle.productsSection[39] = {
              soldOut: false,
              price: 900,
              tags: 'allergens::Kosher,BaB,Birthday,Birthday + Congrats,brand-values::Made in the USA,BUILD A BOX,for::Her,highlights::Handmade,highlights::Made in the USA,highlights::Small Batch,Low stock,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,occasion::Just Because,Sweets,Sweets & Treats,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 42632191803645,
            }
          
            bundle.productsSection[40] = {
              soldOut: false,
              price: 900,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Cruelty Free,Birthday,Birthday + Congrats,BUILD A BOX,for::Her,highlights::Cruelty Free,Low stock,occasion::Birthday,occasion::Congrats,occasion::Just Because,occasion::Thinking Of You,Self-Care,type::Bath & Body,zest-gift'.split(','),
              variantId: 42740953809149,
            }
          
            bundle.productsSection[41] = {
              soldOut: false,
              price: 2600,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Eco Friendly,Birthday,Birthday + Congrats,brand-values::Eco Friendly,BUILD A BOX,for::Her,Just Because,Low stock,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Thank You,type::Drinkware,zest-gift'.split(','),
              variantId: 40868555686081,
            }
          
            bundle.productsSection[42] = {
              soldOut: false,
              price: 500,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::AAPI Owned,Birthday,Birthday + Congrats,brand-values::AAPI Owned,brand-values::Women Owned,BUILD A BOX,for::Her,highlights::Cruelty Free,highlights::Eco Friendly,highlights::Women Owned,Low stock,occasion::Birthday,occasion::Congrats,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Thank You,type::Bath & Body,zest-gift'.split(','),
              variantId: 40002167931073,
            }
          
            bundle.productsSection[43] = {
              soldOut: false,
              price: 1800,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Birthday + Congrats,brand-values::Women Owned,BUILD A BOX,for::Her,highlights::Women Owned,New Baby,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,type::Bath & Body,Woman Owned,zest-gift'.split(','),
              variantId: 40002172453057,
            }
          
            bundle.productsSection[44] = {
              soldOut: false,
              price: 1700,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Birthday,BUILD A BOX,for::Her,Get Well Soon,Just Because,Low stock,occasion::Birthday,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Sympathy,Thank You,type::Journals,zest-gift'.split(','),
              variantId: 40693063844033,
            }
          
            bundle.productsSection[45] = {
              soldOut: false,
              price: 2000,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Organic,brand-values::Eco Friendly,brand-values::Made in the USA,BUILD A BOX,for::All,for::Her,highlights::Family Owned,highlights::Small Batch,highlights::Sustainable,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Tea + Coffee,type::Coffee & Teas,zest-gift'.split(','),
              variantId: 42746916045053,
            }
          
            bundle.productsSection[46] = {
              soldOut: false,
              price: 1200,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Women Owned,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Thinking Of You,Self Care,Sympathy,type::Drinkware,Woman Owned,zest-gift'.split(','),
              variantId: 40002166784193,
            }
          
            bundle.productsSection[47] = {
              soldOut: false,
              price: 400,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,brand-values::Women Owned,BUILD A BOX,for::Her,for::Him,highlights::Women Owned,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Thinking Of You,type::Coffee & Teas,zest-gift'.split(','),
              variantId: 43178820763901,
            }
          
            bundle.productsSection[48] = {
              soldOut: true,
              price: 2400,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Birthday,Birthday + Congrats,brand-values::Women Owned,BUILD A BOX,for::Her,highlights::Handmade,highlights::Women Owned,Low stock,occasion::Birthday,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Sympathy,Thinking of You,type::Bath & Body,zest-gift'.split(','),
              variantId: 43863253025021,
            }
          
            bundle.productsSection[49] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,allergens::Vegan,BaB,brand-values::Eco Friendly,BUILD A BOX,for::Her,highlights::Family Owned,highlights::Organic,highlights::Small Batch,Low stock,New Baby,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,type::Coffee & Teas,zest-gift'.split(','),
              variantId: 42797007732989,
            }
          
            bundle.productsSection[50] = {
              soldOut: false,
              price: 1800,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Latino Owned,brand-values::Women Owned,BUILD A BOX,for::Her,highlights::Women Owned,Low stock,occasion::Birthday,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,type::Bath & Body,zest-gift'.split(','),
              variantId: 42600158626045,
            }
          
            bundle.productsSection[51] = {
              soldOut: false,
              price: 900,
              tags: 'allergens::Gluten Free,BaB,Birthday,Birthday + Congrats,BUILD A BOX,for::Her,Low stock,occasion::Birthday,occasion::Congrats,occasion::Just Because,occasion::Thinking Of You,Sweets,Sweets & Treats,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 42673297195261,
            }
          
            bundle.productsSection[52] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Birthday,brand-values::Women Owned,BUILD A BOX,for::Her,highlights::Women Owned,occasion::Birthday,occasion::Congrats,type::Drinkware,Woman Owned,zest-gift'.split(','),
              variantId: 40333467713729,
            }
          
            bundle.productsSection[53] = {
              soldOut: false,
              price: 1200,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Birthday,Birthday + Congrats,brand-values::Women Owned,BUILD A BOX,for::Her,Get Well Soon,highlights::Women Owned,Just Because,Low stock,occasion::Birthday,occasion::Get Well Soon,occasion::Just Because,occasion::Thinking Of You,Self Care,Sympathy,type::Drinkware,Woman Owned,zest-gift'.split(','),
              variantId: 40002166751425,
            }
          
            bundle.productsSection[54] = {
              soldOut: false,
              price: 1200,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Women Owned,brand-values::Eco Friendly,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::Her,highlights::Handmade,highlights::Organic,highlights::Women Owned,Low stock,New Baby,New Baby BaB,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self-Care,type::Bath & Body,zest-gift'.split(','),
              variantId: 42662891520253,
            }
          
            bundle.productsSection[55] = {
              soldOut: true,
              price: 2200,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Women Owned,brand-values::Made in the USA,brand-values::Sustainable,brand-values::Women Owned,for::All,for::Her,highlights::Handmade,highlights::Made in the USA,highlights::Small Batch,highlights::Women Owned,occasion::Birthday,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,type::Bath & Body'.split(','),
              variantId: 43887722037501,
            }
          
            bundle.productsSection[56] = {
              soldOut: false,
              price: 700,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Birthday,Birthday + Congrats,brand-values::Women Owned,BUILD A BOX,for::Her,highlights::Women Owned,Just Because,Low stock,occasion::Birthday,occasion::Just Because,occasion::Thinking Of You,Self Care,type::Socks & Accessories,Woman Owned,zest-gift'.split(','),
              variantId: 43178689265917,
            }
          
            bundle.productsSection[57] = {
              soldOut: false,
              price: 900,
              tags: 'allergens::Gluten Free,allergens::Kosher,BaB,Birthday,Birthday + Congrats,BUILD A BOX,for::All,for::Her,Holiday,Low stock,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Sweets,Sweets & Treats,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 42673294999805,
            }
          
            bundle.productsSection[58] = {
              soldOut: false,
              price: 1200,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Birthday,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Women Owned,Holiday,Low stock,New Baby,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Sympathy,type::Socks & Accessories,Woman-owned,zest-gift'.split(','),
              variantId: 40002167668929,
            }
          
            bundle.productsSection[59] = {
              soldOut: false,
              price: 400,
              tags: 'allergens::Gluten Free,BaB,Birthday,brand-values::Made in the USA,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,Low stock,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Thinking Of You,Self-Care,Sweets,Sweets & Treats,Sympathy,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 40498670928065,
            }
          
            bundle.productsSection[60] = {
              soldOut: false,
              price: 300,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,highlights::Handmade,highlights::Organic,highlights::Women Owned,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self-Care,type::Bath & Body,zest-gift'.split(','),
              variantId: 43066244464893,
            }
          
            bundle.productsSection[61] = {
              soldOut: false,
              price: 700,
              tags: 'BaB,Birthday,Birthday + Congrats,brand-values::Made in the USA,BUILD A BOX,for::All,for::Her,for::Him,highlights::Handmade,highlights::Made in the USA,highlights::Small Batch,Just Because,Low stock,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Sweets & Treats,Sympathy,Thank You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 40772143022273,
            }
          
            bundle.productsSection[62] = {
              soldOut: false,
              price: 1200,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Birthday,Birthday + Congrats,brand-values::Made in the USA,brand-values::Sustainable,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,Low stock,New Baby,New Baby BaB,occasion::Birthday,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,type::Bath & Body,Woman-owned,zest-gift'.split(','),
              variantId: 43690063462653,
            }
          
            bundle.productsSection[63] = {
              soldOut: true,
              price: 2600,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Eco Friendly,Birthday,Birthday + Congrats,brand-values::Eco Friendly,BUILD A BOX,for::All,for::Her,Just Because,Low stock,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Thank You,type::Drinkware,zest-gift'.split(','),
              variantId: 43319222337789,
            }
          
            bundle.productsSection[64] = {
              soldOut: false,
              price: 900,
              tags: 'allergens::Gluten Free,BaB,Badge::Women Owned,brand-values::Made in the USA,brand-values::Sustainable,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,highlights::Made in the USA,highlights::Small Batch,highlights::Women Owned,Holiday,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Sweets,Sweets & Treats,Sympathy,Thank You,type::Chocolate & Sweets,Woman Owned,zest-gift'.split(','),
              variantId: 40002166292673,
            }
          
            bundle.productsSection[65] = {
              soldOut: true,
              price: 500,
              tags: 'BaB,brand-values::Made in the USA,brand-values::Women Owned,for::All,for::Her,for::Him,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,Holiday,Low stock,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 43624826700029,
            }
          
            bundle.productsSection[66] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,allergens::Vegan,BaB,Badge::Sustainable,Birthday + Congrats,brand-values::Made in the USA,brand-values::Sustainable,brand-values::Women Owned,BUILD A BOX,for::Her,Get Well Soon,highlights::Organic,highlights::Small Batch,highlights::Women Owned,New Baby,occasion::Birthday,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Sympathy,Tea & Coffee,type::Coffee & Teas,Woman Owned,zest-gift'.split(','),
              variantId: 40002166161601,
            }
          
            bundle.productsSection[67] = {
              soldOut: false,
              price: 700,
              tags: 'BaB,Birthday + Congrats,BUILD A BOX,for::Her,Low stock,occasion::Birthday,occasion::Congrats,occasion::Just Because,occasion::Thinking Of You,Sweets & Treats,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 40002166358209,
            }
          
            bundle.productsSection[68] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::LGBTQ+ Owned,Birthday,Birthday + Congrats,brand-values::Made in the USA,brand-values::Sustainable,brand-values::Women Owned,BUILD A BOX,for::Her,highlights::Handmade,highlights::Sustainable,highlights::Women Owned,Low stock,occasion::Birthday,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self-Care,Thank You,type::Bath & Body,zest-gift'.split(','),
              variantId: 40333470662849,
            }
          
            bundle.productsSection[69] = {
              soldOut: false,
              price: 800,
              tags: 'allergens::Kosher,BaB,Badge::Women Owned,Birthday,Birthday + Congrats,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,highlights::Made in the USA,highlights::Small Batch,highlights::Women Owned,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Sweets,Sweets & Treats,Sympathy,Thank You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 42637278707965,
            }
          
            bundle.productsSection[70] = {
              soldOut: false,
              price: 700,
              tags: 'BaB,Birthday,BUILD A BOX,for::All,for::Her,Low stock,occasion::Birthday,occasion::Congrats,occasion::Just Because,occasion::Thinking Of You,Sweets & Treats,type::Chocolate & Sweets,Woman-owned,zest-gift'.split(','),
              variantId: 40848229597377,
            }
          
            bundle.productsSection[71] = {
              soldOut: false,
              price: 1000,
              tags: 'BaB,Badge::Handmade,Birthday,Birthday + Congrats,brand-values::Made in the USA,BUILD A BOX,for::Her,highlights::Handmade,highlights::Small Batch,Low stock,occasion::Birthday,occasion::Congrats,Sweets,Sweets & Treats,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 42673305157885,
            }
          
            bundle.productsSection[72] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,allergens::Vegan,BaB,Badge::Women Owned,Birthday,Birthday + Congrats,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Organic,highlights::Small Batch,highlights::Women Owned,occasion::Get Well Soon,Self Care,Sympathy,Tea & Coffee,type::Coffee & Teas,Woman Owned,zest-gift'.split(','),
              variantId: 43178653057277,
            }
          
            bundle.productsSection[73] = {
              soldOut: false,
              price: 700,
              tags: 'allergens::Gluten Free,allergens::Kosher,BaB,Birthday,brand-values::Made in the USA,BUILD A BOX,for::Her,highlights::Family Owned,highlights::Made in the USA,highlights::Small Batch,Low stock,occasion::Birthday,Sweets,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 40650991763649,
            }
          
            bundle.productsSection[74] = {
              soldOut: false,
              price: 600,
              tags: 'allergens::Gluten Free,allergens::Vegan,BaB,Badge::Women Owned,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,Low stock,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Sympathy,Thank You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 42796980240637,
            }
          
            bundle.productsSection[75] = {
              soldOut: false,
              price: 800,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Handmade,Birthday,Birthday + Congrats,brand-values::Made in the USA,BUILD A BOX,For Him,highlights::Family Owned,highlights::Handmade,highlights::Organic,Just Because,occasion::Birthday,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Sweets,Sweets & Treats,Sympathy,Thank You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 40002169176257,
            }
          
            bundle.productsSection[76] = {
              soldOut: true,
              price: 400,
              tags: 'allergens::Gluten Free,BaB,Birthday,Birthday + Congrats,brand-values::Made in the USA,BUILD A BOX,for::All,for::Her,for::Him,highlights::Family Owned,highlights::Handmade,highlights::Small Batch,Holiday,Just Because,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Sweets & Treats,Sympathy,Thank You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 43512176214269,
            }
          
            bundle.productsSection[77] = {
              soldOut: true,
              price: 1000,
              tags: 'allergens::Gluten Free,allergens::Vegan,BaB,Badge::Women Owned,Birthday,brand-values::Eco Friendly,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Organic,highlights::Small Batch,highlights::Women Owned,Holiday,Low stock,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Sympathy,type::Coffee & Teas'.split(','),
              variantId: 42077875306749,
            }
          
            bundle.productsSection[78] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,allergens::Vegan,BaB,Badge::Sustainable,brand-values::Eco Friendly,brand-values::Made in the USA,brand-values::Sustainable,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Organic,highlights::Small Batch,highlights::Women Owned,Low stock,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Tea & Coffee,type::Coffee & Teas,Woman Owned,zest-gift'.split(','),
              variantId: 40002166128833,
            }
          
            bundle.productsSection[79] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,allergens::Vegan,BaB,Badge::Women Owned,Birthday,Birthday + Congrats,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Organic,highlights::Small Batch,highlights::Women Owned,Holiday,Low stock,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Sympathy,Tea & Coffee,type::Coffee & Teas,Woman Owned,zest-gift'.split(','),
              variantId: 40333514211521,
            }
          
            bundle.productsSection[80] = {
              soldOut: false,
              price: 500,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::AAPI Owned,Birthday,Birthday + Congrats,brand-values::AAPI Owned,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Cruelty Free,highlights::Eco Friendly,highlights::Women Owned,Just Because,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Sympathy,Thank You,type::Bath & Body,zest-gift'.split(','),
              variantId: 40002167898305,
            }
          
            bundle.productsSection[81] = {
              soldOut: false,
              price: 800,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Handmade,Birthday,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,For Him,for::All,for::Her,Get Well Soon,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,Holiday,Low stock,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Sympathy,type::Bath & Body,zest-gift'.split(','),
              variantId: 40071742881985,
            }
          
            bundle.productsSection[82] = {
              soldOut: false,
              price: 1400,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::AAPI Owned,brand-values::AAPI Owned,brand-values::Sustainable,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Cruelty Free,highlights::Handmade,highlights::Women Owned,Low stock,New Baby,New Baby BaB,occasion::Corporate Gifting,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,type::Bath & Body,zest-gift'.split(','),
              variantId: 42502712131837,
            }
          
            bundle.productsSection[83] = {
              soldOut: false,
              price: 1200,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Birthday,brand-values::Women Owned,BUILD A BOX,For Him,for::All,for::Her,Get Well Soon,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,New Baby,occasion::Birthday,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,pre-built,Self Care,Sympathy,type::Bath & Body,Woman Owned,zest-gift'.split(','),
              variantId: 40071743275201,
            }
          
            bundle.productsSection[84] = {
              soldOut: true,
              price: 600,
              tags: 'BaB,Badge::Women Owned,Birthday,Birthday + Congrats,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,occasion::Birthday,occasion::Just Because,occasion::Thinking Of You,Sweets & Treats,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 40895416664257,
            }
          
            bundle.productsSection[85] = {
              soldOut: false,
              price: 900,
              tags: 'allergens::Gluten Free,allergens::Kosher,BaB,Birthday,Birthday + Congrats,BUILD A BOX,for::All,for::Her,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,Sweets,Sweets & Treats,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 42673295130877,
            }
          
            bundle.productsSection[86] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::AAPI Owned,Birthday,Birthday + Congrats,brand-values::AAPI Owned,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Cruelty Free,highlights::Eco Friendly,highlights::Women Owned,Just Because,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Sympathy,Thank You,type::Bath & Body,zest-gift'.split(','),
              variantId: 43882903994621,
            }
          
            bundle.productsSection[87] = {
              soldOut: false,
              price: 900,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,Holiday,occasion::Corporate Gifting,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,type::Bath & Body,zest-gift'.split(','),
              variantId: 42077905682685,
            }
          
            bundle.productsSection[88] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Birthday,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,New Baby,occasion::Birthday,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Sympathy,type::Bath & Body,Woman Owned,zest-gift'.split(','),
              variantId: 40002172420289,
            }
          
            bundle.productsSection[89] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Birthday,Birthday + Congrats,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,highlights::Women Owned,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,type::Drinkware,Woman Owned,zest-gift'.split(','),
              variantId: 40002170355905,
            }
          
            bundle.productsSection[90] = {
              soldOut: true,
              price: 2000,
              tags: 'allergens::Gluten Free,BaB,Birthday,brand-values::Made in the USA,BUILD A BOX,for::All,for::Him,highlights::Made in the USA,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,type::Cocktail Mixers,zest-gift'.split(','),
              variantId: 40868548608193,
            }
          
            bundle.productsSection[91] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,allergens::Vegan,BaB,Badge::Sustainable,brand-values::Made in the USA,brand-values::Sustainable,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,Get Well Soon,highlights::Organic,highlights::Small Batch,highlights::Women Owned,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Thinking Of You,Self Care,Tea & Coffee,type::Coffee & Teas,Woman Owned,zest-gift'.split(','),
              variantId: 40002166259905,
            }
          
            bundle.productsSection[92] = {
              soldOut: false,
              price: 1200,
              tags: 'allergens::Gluten Free,allergens::Kosher,BaB,Birthday,Birthday + Congrats,BUILD A BOX,for::Her,highlights::Cruelty Free,Low stock,New Baby,occasion::Birthday,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self-Care,Thank You,type::Bath & Body,zest-gift'.split(','),
              variantId: 43870794055933,
            }
          
            bundle.productsSection[93] = {
              soldOut: false,
              price: 800,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Organic,Birthday,Birthday + Congrats,brand-values::Made in the USA,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Handmade,highlights::Organic,Just Because,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Thinking Of You,Sweets,Sweets & Treats,Sympathy,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 40002169929921,
            }
          
            bundle.productsSection[94] = {
              soldOut: true,
              price: 700,
              tags: 'BaB,Birthday,BUILD A BOX,Low stock,Sweets & Treats,zest-gift'.split(','),
              variantId: 40693105918145,
            }
          
            bundle.productsSection[95] = {
              soldOut: false,
              price: 1000,
              tags: 'BaB,Badge::Sustainable,Birthday,Birthday + Congrats,brand-values::Made in the USA,brand-values::Sustainable,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,highlights::Made in the USA,highlights::Sustainable,highlights::Women Owned,occasion::Birthday,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Thinking Of You,Self Care,type::Bath & Body,zest-gift'.split(','),
              variantId: 40002169045185,
            }
          
            bundle.productsSection[96] = {
              soldOut: false,
              price: 2400,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Women Owned,Birthday,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,highlights::Cruelty Free,highlights::Women Owned,Just Because,Low stock,occasion::Birthday,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Thank You,type::Bath & Body,zest-gift'.split(','),
              variantId: 42967436558589,
            }
          
            bundle.productsSection[97] = {
              soldOut: false,
              price: 800,
              tags: 'allergens::Gluten Free,BaB,Birthday,brand-values::Made in the USA,BUILD A BOX,For Him,highlights::Small Batch,Just Because,Low stock,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Octane: For All,Octane: For Her,Octane: For Him,Sweets & Treats,Sympathy,Thank You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 40693104672961,
            }
          
            bundle.productsSection[98] = {
              soldOut: false,
              price: 1000,
              tags: 'BaB,Badge::Sustainable,Birthday,Birthday + Congrats,brand-values::Made in the USA,brand-values::Sustainable,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,highlights::Made in the USA,highlights::Sustainable,highlights::Women Owned,occasion::Birthday,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Thinking Of You,Self Care,type::Bath & Body,zest-gift'.split(','),
              variantId: 43889662755069,
            }
          
            bundle.productsSection[99] = {
              soldOut: false,
              price: 1600,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Women Owned,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,Low stock,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,pre-built,Self Care,type::Bath & Body,zest-gift'.split(','),
              variantId: 40071744716993,
            }
          
            bundle.productsSection[100] = {
              soldOut: false,
              price: 500,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::AAPI Owned,Birthday + Congrats,brand-values::AAPI Owned,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,highlights::Cruelty Free,highlights::Eco Friendly,highlights::Women Owned,Just Because,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Thank You,type::Bath & Body,zest-gift'.split(','),
              variantId: 40002167865537,
            }
          
            bundle.productsSection[101] = {
              soldOut: false,
              price: 800,
              tags: 'allergens::Gluten Free,allergens::Kosher,BaB,Badge::Organic,brand-values::Made in the USA,brand-values::Sustainable,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Family Owned,highlights::Organic,highlights::Small Batch,Low stock,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Sympathy,type::Coffee & Teas,zest-gift'.split(','),
              variantId: 43900483305725,
            }
          
            bundle.productsSection[102] = {
              soldOut: false,
              price: 400,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Women Owned,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Thinking Of You,type::Cocktail Mixers,zest-gift'.split(','),
              variantId: 40071744225473,
            }
          
            bundle.productsSection[103] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,allergens::Vegan,BaB,Badge::Women Owned,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Organic,highlights::Small Batch,highlights::Women Owned,Low stock,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Tea & Coffee,type::Coffee & Teas,Woman Owned,zest-gift'.split(','),
              variantId: 40044345884865,
            }
          
            bundle.productsSection[104] = {
              soldOut: false,
              price: 700,
              tags: 'BaB,Birthday,Birthday + Congrats,BUILD A BOX,for::All,for::Her,for::Him,highlights::Family Owned,highlights::Made in the USA,highlights::Small Batch,Just Because,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Sweets & Treats,Sympathy,Thank You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 42607630909693,
            }
          
            bundle.productsSection[105] = {
              soldOut: false,
              price: 1400,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Birthday,BUILD A BOX,for::All,for::Her,Just Because,occasion::Birthday,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Thinking Of You,Thank You,type::Journals,zest-gift'.split(','),
              variantId: 40071740195009,
            }
          
            bundle.productsSection[106] = {
              soldOut: true,
              price: 1400,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Organic,brand-values::Made in the USA,brand-values::Sustainable,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Family Owned,highlights::Organic,highlights::Sustainable,Low stock,New Baby,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Tea & Coffee,type::Coffee & Teas,zest-gift'.split(','),
              variantId: 40002169962689,
            }
          
            bundle.productsSection[107] = {
              soldOut: false,
              price: 800,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Handmade,Birthday + Congrats,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::Her,Get Well Soon,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,Low stock,New Baby,New Baby BaB,occasion::Birthday,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,type::Bath & Body,zest-gift'.split(','),
              variantId: 40002168651969,
            }
          
            bundle.productsSection[108] = {
              soldOut: true,
              price: 1600,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,BUILD A BOX,for::All,for::Her,for::Him,highlights::Family Owned,highlights::Small Batch,Housewarming,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Tea & Coffee,Thank You,type::Coffee & Teas,zest-gift'.split(','),
              variantId: 42522757890301,
            }
          
            bundle.productsSection[109] = {
              soldOut: false,
              price: 700,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,highlights::Women Owned,Home + Kitchen,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Tea & Coffee,type::Coffee & Teas,zest-gift'.split(','),
              variantId: 40002166816961,
            }
          
            bundle.productsSection[110] = {
              soldOut: false,
              price: 300,
              tags: 'BaB,Birthday,Birthday + Congrats,brand-values::Made in the USA,BUILD A BOX,For Him,for::All,for::Her,Get Well Soon,highlights::Handmade,highlights::Made in the USA,highlights::Small Batch,Holiday,occasion::Just Because,occasion::Thinking Of You,Sweets & Treats,Sympathy,Tea + Coffee,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 40772091805889,
            }
          
            bundle.productsSection[111] = {
              soldOut: false,
              price: 700,
              tags: 'BaB,Badge::Handmade,brand-values::Made in the USA,BUILD A BOX,for::All,for::Her,for::Him,highlights::Handmade,highlights::Made in the USA,highlights::Small Batch,Just Because,Low stock,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Sweets & Treats,Thank You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 40914373116097,
            }
          
            bundle.productsSection[112] = {
              soldOut: false,
              price: 900,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,brand-values::Women Owned,BUILD A BOX,for::All,for::Him,highlights::Women Owned,occasion::Birthday,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Thinking Of You,type::Socks & Accessories,zest-gift'.split(','),
              variantId: 42468612636925,
            }
          
            bundle.productsSection[113] = {
              soldOut: true,
              price: 850,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::AAPI Owned,brand-values::AAPI Owned,BUILD A BOX,for::All,for::Her,highlights::Cruelty Free,Low stock,occasion::Birthday,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,type::Bath & Body,zest-gift'.split(','),
              variantId: 40693104574657,
            }
          
            bundle.productsSection[114] = {
              soldOut: false,
              price: 900,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Birthday + Congrats,BUILD A BOX,for::All,for::Her,occasion::Birthday,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Thank You,type::Journals,zest-gift'.split(','),
              variantId: 40002170814657,
            }
          
            bundle.productsSection[115] = {
              soldOut: false,
              price: 1400,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,Badge::Organic,brand-values::Made in the USA,BUILD A BOX,highlights::Family Owned,highlights::Handmade,highlights::Organic,Holiday,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 43639869440253,
            }
          
            bundle.productsSection[116] = {
              soldOut: true,
              price: 1200,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Social Good,brand-values::Made in the USA,brand-values::Sustainable,BUILD A BOX,for::All,for::Her,for::Him,highlights::Handmade,highlights::Social Good,highlights::Sustainable,Low stock,occasion::Corporate Gifting,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self-Care,Sympathy,Thank You,type::Bath & Body,zest-gift'.split(','),
              variantId: 43687656063229,
            }
          
            bundle.productsSection[117] = {
              soldOut: false,
              price: 2400,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Birthday,brand-values::Made in the USA,BUILD A BOX,for::All,for::Her,for::Him,highlights::Handmade,highlights::Made in the USA,highlights::Sustainable,Holiday,Low stock,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Sympathy,type::Bath & Body,zest-gift'.split(','),
              variantId: 40071743865025,
            }
          
            bundle.productsSection[118] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,allergens::Vegan,BaB,Badge::Sustainable,brand-values::Made in the USA,brand-values::Sustainable,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Organic,highlights::Small Batch,highlights::Women Owned,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Thinking Of You,Self Care,Tea & Coffee,type::Coffee & Teas,Woman Owned,zest-gift'.split(','),
              variantId: 40002166096065,
            }
          
            bundle.productsSection[119] = {
              soldOut: true,
              price: 1100,
              tags: 'BaB,BUILD A BOX,Low stock,Self-Care,Sympathy,Thank You'.split(','),
              variantId: 42750159028477,
            }
          
            bundle.productsSection[120] = {
              soldOut: false,
              price: 900,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Birthday + Congrats,BUILD A BOX,for::All,for::Her,Low stock,occasion::Birthday,occasion::Just Because,occasion::Thinking Of You,type::Journals,zest-gift'.split(','),
              variantId: 40002171633857,
            }
          
            bundle.productsSection[121] = {
              soldOut: false,
              price: 1600,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Women Owned,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,highlights::Women Owned,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Thank You,type::Journals,zest-gift'.split(','),
              variantId: 42662854459645,
            }
          
            bundle.productsSection[122] = {
              soldOut: false,
              price: 600,
              tags: 'allergens::Gluten Free,BaB,Birthday,Birthday + Congrats,brand-values::Made in the USA,BUILD A BOX,for::All,for::Her,for::Him,highlights::Family Owned,highlights::Handmade,highlights::Small Batch,Low stock,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Sweets,Sweets & Treats,Sympathy,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 40002168324289,
            }
          
            bundle.productsSection[123] = {
              soldOut: false,
              price: 900,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Handmade,Birthday,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,Get Well Soon,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,Low stock,New Baby,New Baby BaB,occasion::Birthday,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self-Care,Sympathy,type::Bath & Body,zest-gift'.split(','),
              variantId: 40173298647233,
            }
          
            bundle.productsSection[124] = {
              soldOut: false,
              price: 1200,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Handmade,brand-values::Made in the USA,brand-values::Sustainable,brand-values::Women Owned,BUILD A BOX,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self-Care,type::Bath & Body,zest-gift'.split(','),
              variantId: 42662894928125,
            }
          
            bundle.productsSection[125] = {
              soldOut: false,
              price: 800,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Handmade,Birthday + Congrats,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,Housewarming,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,type::Bath & Body,zest-gift'.split(','),
              variantId: 40002168684737,
            }
          
            bundle.productsSection[126] = {
              soldOut: false,
              price: 1400,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,BUILD A BOX,for::All,for::Her,for::Him,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Thank You,type::Journals,zest-gift'.split(','),
              variantId: 42662913310973,
            }
          
            bundle.productsSection[127] = {
              soldOut: false,
              price: 2600,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,brand-values::Sustainable,BUILD A BOX,for::All,for::Him,highlights::Sustainable,Low stock,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,type::Drinkware,zest-gift'.split(','),
              variantId: 40071744127169,
            }
          
            bundle.productsSection[128] = {
              soldOut: false,
              price: 1400,
              tags: 'allergens::Gluten Free,allergens::Vegan,BaB,brand-values::Made in the USA,brand-values::Sustainable,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Sympathy,type::Coffee & Teas,zest-gift'.split(','),
              variantId: 42637277987069,
            }
          
            bundle.productsSection[129] = {
              soldOut: false,
              price: 800,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Women Owned,Low stock,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Tea & Coffee,type::Coffee & Teas,zest-gift'.split(','),
              variantId: 42673318822141,
            }
          
            bundle.productsSection[130] = {
              soldOut: false,
              price: 800,
              tags: 'allergens::Gluten Free,BaB,Birthday,brand-values::Made in the USA,BUILD A BOX,for::All,for::Her,for::Him,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Sweets & Treats,Sympathy,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 40071742718145,
            }
          
            bundle.productsSection[131] = {
              soldOut: false,
              price: 1300,
              tags: 'BaB,Badge::Women Owned,Birthday,Birthday + Congrats,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,Low stock,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Sweets & Treats,Sympathy,Thank You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 42796965462269,
            }
          
            bundle.productsSection[132] = {
              soldOut: false,
              price: 1200,
              tags: 'BaB,Badge::Women Owned,Birthday,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,For Him,highlights::Organic,highlights::Small Batch,highlights::Women Owned,Holiday,Housewarming,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Sweets,Sweets & Treats,Thank You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 40071743340737,
            }
          
            bundle.productsSection[133] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,allergens::Vegan,BaB,Badge::Women Owned,Birthday,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,For Him,highlights::Organic,highlights::Small Batch,highlights::Women Owned,Holiday,Housewarming,Low stock,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Sweets,Sympathy,Thank You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 40071743406273,
            }
          
            bundle.productsSection[134] = {
              soldOut: false,
              price: 1200,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,highlights::Women Owned,Housewarming,occasion::Just Because,occasion::Thinking Of You,Woman-owned,zest-gift'.split(','),
              variantId: 40071743733953,
            }
          
            bundle.productsSection[135] = {
              soldOut: false,
              price: 700,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::AAPI Owned,brand-values::AAPI Owned,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Cruelty Free,New Baby,New Baby BaB,occasion::Birthday,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Thank You,type::Bath & Body,zest-gift'.split(','),
              variantId: 40071743766721,
            }
          
            bundle.productsSection[136] = {
              soldOut: false,
              price: 900,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Handmade,brand-values::Sustainable,BUILD A BOX,for::All,for::Her,for::Him,Get Well Soon,highlights::Family Owned,highlights::Handmade,highlights::Sustainable,Low stock,occasion::Get Well Soon,type::Coffee & Teas,zest-gift'.split(','),
              variantId: 40071739900097,
            }
          
            bundle.productsSection[137] = {
              soldOut: false,
              price: 900,
              tags: 'allergens::Gluten Free,BaB,BUILD A BOX,for::Him,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Sweets,Sweets & Treats,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 42673263116541,
            }
          
            bundle.productsSection[138] = {
              soldOut: false,
              price: 2000,
              tags: 'allergens::Gluten Free,BaB,Birthday,Birthday + Congrats,brand-values::Made in the USA,BUILD A BOX,for::All,for::Her,for::Him,highlights::Made in the USA,Low stock,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,type::Cocktail Mixers,zest-gift'.split(','),
              variantId: 42043256340733,
            }
          
            bundle.productsSection[139] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,BaB,Birthday,Birthday + Congrats,brand-values::Made in the USA,BUILD A BOX,for::All,for::Him,highlights::Family Owned,highlights::Handmade,highlights::Made in the USA,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Thank You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 40071744258241,
            }
          
            bundle.productsSection[140] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Handmade,brand-values::Eco Friendly,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,highlights::Handmade,highlights::Made in the USA,highlights::Women Owned,Low stock,New Baby BaB,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self-Care,type::Bath & Body,zest-gift'.split(','),
              variantId: 42796995281149,
            }
          
            bundle.productsSection[141] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,BaB,Badge::Women Owned,Birthday,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,Holiday,Just Because,Low stock,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Sweets,Sweets & Treats,Sympathy,Thank You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 40071744356545,
            }
          
            bundle.productsSection[142] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,BaB,Badge::Women Owned,brand-values::Made in the USA,BUILD A BOX,for::All,for::Him,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Sweets,Sweets & Treats,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 42673220911357,
            }
          
            bundle.productsSection[143] = {
              soldOut: false,
              price: 1400,
              tags: 'allergens::Gluten Free,BaB,brand-values::Made in the USA,BUILD A BOX,for::All,for::Him,highlights::Made in the USA,Low stock,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,type::Cocktail Mixers,zest-gift'.split(','),
              variantId: 42637275463933,
            }
          
            bundle.productsSection[144] = {
              soldOut: false,
              price: 600,
              tags: 'allergens::Gluten Free,BaB,Birthday,Birthday + Congrats,brand-values::Made in the USA,BUILD A BOX,for::All,for::Her,for::Him,highlights::Family Owned,highlights::Handmade,highlights::Small Batch,Just Because,Low stock,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Sweets & Treats,Sympathy,Thank You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 40002168258753,
            }
          
            bundle.productsSection[145] = {
              soldOut: false,
              price: 900,
              tags: 'allergens::Gluten Free,allergens::Kosher,BaB,Birthday,Birthday + Congrats,BUILD A BOX,for::All,for::Her,for::Him,Low stock,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Sweets,Sweets & Treats,Sympathy,Thank You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 42673300537597,
            }
          
            bundle.productsSection[146] = {
              soldOut: false,
              price: 1600,
              tags: 'allergens::Gluten Free,allergens::Vegan,BaB,Birthday,brand-values::Made in the USA,BUILD A BOX,for::All,for::Him,highlights::Family Owned,highlights::Made in the USA,highlights::Small Batch,Holiday,Low stock,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,type::Cocktail Mixers,zest-gift'.split(','),
              variantId: 40071744159937,
            }
          
            bundle.productsSection[147] = {
              soldOut: false,
              price: 2200,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Women Owned,Birthday,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,highlights::Women Owned,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Thank You,type::Journals,zest-gift'.split(','),
              variantId: 43863251747069,
            }
          
            bundle.productsSection[148] = {
              soldOut: false,
              price: 900,
              tags: 'BaB,Badge::AAPI Owned,Birthday,brand-values::AAPI Owned,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,Holiday,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,occasion::Just Because,Sweets,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 40071743963329,
            }
          
            bundle.productsSection[149] = {
              soldOut: false,
              price: 1200,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::AAPI Owned,Birthday,brand-values::AAPI Owned,brand-values::Made in the USA,brand-values::Sustainable,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,for::Him,highlights::Small Batch,highlights::Sustainable,highlights::Women Owned,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Tea + Coffee,type::Coffee & Teas,Woman Owned,zest-gift'.split(','),
              variantId: 40071742292161,
            }
          
            bundle.productsSection[150] = {
              soldOut: false,
              price: 1000,
              tags: 'BaB,Badge::Handmade,Birthday,Birthday + Congrats,brand-values::Made in the USA,BUILD A BOX,for::All,for::Him,highlights::Handmade,highlights::Small Batch,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Just Because,occasion::Thinking Of You,Sweets,Sweets & Treats,Sympathy,Thank You,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 42673304338685,
            }
          
            bundle.productsSection[151] = {
              soldOut: false,
              price: 900,
              tags: 'allergens::Gluten Free,BaB,Birthday,Birthday + Congrats,BUILD A BOX,for::All,for::Her,Low stock,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,Sweets,Sweets & Treats,type::Chocolate & Sweets,zest-gift'.split(','),
              variantId: 43900473245949,
            }
          
            bundle.productsSection[152] = {
              soldOut: false,
              price: 800,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Handmade,brand-values::Made in the USA,brand-values::Women Owned,BUILD A BOX,for::All,for::Him,Get Well Soon,highlights::Handmade,highlights::Small Batch,highlights::Women Owned,Just Because,Low stock,occasion::Birthday,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Just Because,occasion::Self Care,occasion::Thinking Of You,Self Care,Sympathy,Thank You,type::Bath & Body,zest-gift'.split(','),
              variantId: 40002168586433,
            }
          
            bundle.productsSection[153] = {
              soldOut: false,
              price: 2500,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Sustainable,brand-values::Sustainable,BUILD A BOX,for::All,for::Him,occasion::Birthday,occasion::Congrats,occasion::Corporate Gifting,occasion::Get Well Soon,occasion::Thinking Of You,Sympathy,Tea & Coffee,Thank You,type::Drinkware,zest-gift'.split(','),
              variantId: 40071744323777,
            }
          
            bundle.productsSection[154] = {
              soldOut: false,
              price: 1800,
              tags: 'BaB,Badge::Women Owned,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,New Baby,New Baby BaB,occasion::New Baby,type::Baby,Woman Owned,zest-gift'.split(','),
              variantId: 40071742947521,
            }
          
            bundle.productsSection[155] = {
              soldOut: false,
              price: 800,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Women Owned,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,New Baby,New Baby BaB,occasion::New Baby,type::Baby,zest-gift'.split(','),
              variantId: 40071742783681,
            }
          
            bundle.productsSection[156] = {
              soldOut: false,
              price: 1400,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Women Owned,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,New Baby,New Baby BaB,occasion::New Baby,type::Baby,Woman Owned,zest-gift'.split(','),
              variantId: 40002165899457,
            }
          
            bundle.productsSection[157] = {
              soldOut: false,
              price: 1400,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Handmade,brand-values::Eco Friendly,BUILD A BOX,for::All,for::Her,highlights::Handmade,highlights::Organic,highlights::Sustainable,Low stock,New Baby,New Baby BaB,occasion::New Baby,type::Baby,zest-gift'.split(','),
              variantId: 42662997295357,
            }
          
            bundle.productsSection[158] = {
              soldOut: true,
              price: 1000,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,BUILD A BOX,for::All,for::Her,New Baby,New Baby BaB,occasion::New Baby,type::Baby,zest-gift'.split(','),
              variantId: 42662743671037,
            }
          
            bundle.productsSection[159] = {
              soldOut: true,
              price: 1300,
              tags: 'allergens::Gluten Free,allergens::Vegan,BaB,Badge::Women Owned,brand-values::Women Owned,BUILD A BOX,for::Her,highlights::Organic,highlights::Small Batch,highlights::Women Owned,New Baby,New Baby BaB,occasion::New Baby,type::Coffee & Teas,zest-gift'.split(','),
              variantId: 42663335166205,
            }
          
            bundle.productsSection[160] = {
              soldOut: false,
              price: 1400,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,brand-values::Women Owned,BUILD A BOX,for::Her,highlights::Women Owned,Low stock,New Baby,occasion::New Baby,type::Baby,zest-gift'.split(','),
              variantId: 43690084139261,
            }
          
            bundle.productsSection[161] = {
              soldOut: true,
              price: 1600,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Women Owned,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,highlights::Handmade,highlights::Women Owned,New Baby BaB,occasion::New Baby,type::Baby,zest-gift'.split(','),
              variantId: 42746153271549,
            }
          
            bundle.productsSection[162] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,BUILD A BOX,for::All,for::Her,New Baby BaB,occasion::New Baby,type::Baby,zest-gift'.split(','),
              variantId: 42746071351549,
            }
          
            bundle.productsSection[163] = {
              soldOut: false,
              price: 800,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Women Owned,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,New Baby,occasion::New Baby,type::Baby,Woman Owned,zest-gift'.split(','),
              variantId: 40002165964993,
            }
          
            bundle.productsSection[164] = {
              soldOut: false,
              price: 800,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Women Owned,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,New Baby,New Baby BaB,occasion::New Baby,type::Baby,zest-gift'.split(','),
              variantId: 42640610230525,
            }
          
            bundle.productsSection[165] = {
              soldOut: true,
              price: 1600,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,Badge::Women Owned,brand-values::Women Owned,BUILD A BOX,for::All,for::Her,highlights::Handmade,highlights::Women Owned,New Baby BaB,occasion::New Baby,type::Baby,zest-gift'.split(','),
              variantId: 42746155368701,
            }
          
            bundle.productsSection[166] = {
              soldOut: false,
              price: 1000,
              tags: 'allergens::Gluten Free,allergens::Kosher,allergens::Vegan,BaB,BUILD A BOX,for::All,for::Her,New Baby BaB,occasion::New Baby,type::Baby,zest-gift'.split(','),
              variantId: 42746069647613,
            }
          
    
          
            bundle.addedProducts[0] = {
              quantity: 1,
              sku: 'CUSTOMBOX-MAILER',
              name: 'Mailer Box',
              index: 0
            }
          
          
           window.bundleApp.run(bundle);
