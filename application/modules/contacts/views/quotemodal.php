<div class="modal fade contact-custom-modal" id="qteModal" tabindex="-1" role="dialog" aria-labelledby="qteModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="contact-form-header">
                <span>Get a free quote</span>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="setClose()">
                    <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
                </button>
            </div>
            <form id="quotemodal" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="resultquotemodal" onsubmit="return false;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-person-badge"></i>
                                <input type="text" class="form-control" name="name" placeholder="Your Name" aria-label="Your Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-phone-vibrate"></i>
                                <input type="tel" class="form-control" name="phone" placeholder="Mobile Number" aria-label="Mobile Number">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-envelope-at"></i>
                                <input type="text" class="form-control" name="email" placeholder="Your Email" aria-label="Your Email">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                                <input type="text" class="form-control" name="mfrom" placeholder="From City" aria-label="From City">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-map-fill"></i>
                                <input type="text" class="form-control" name="mto" placeholder="To City" aria-label="To City">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-box-seam"></i>
                                <select class="form-control form-select-custom" name="service" id="modalServiceSelect" required aria-label="Select Service / Relocation Type">
                                    <option value="">Select Service / Relocation Type</option>
                                    <option value="packing-and-moving">Packing and Moving</option>
                                    <option value="loading-and-unloading">Loading and Unloading</option>
                                    <option value="residential-relocation">Residential Relocation</option>
                                    <option value="home-relocation">Home Relocation</option>
                                    <option value="office-relocation">Office Relocation</option>
                                    <option value="car-transportation">Car Transportation</option>
                                    <option value="bike-transportation">Bike Transportation</option>
                                    <option value="international-transportation">International Transportation</option>
                                    <option value="warehousing-and-storage">Warehousing and Storage</option>
                                    <option value="transport-insurance">Transport Insurance</option>
                                    <option value="heavy-machinery-and-shifting">Heavy Machinery and Shifting</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Dynamic Articles Selector Block -->
                    <div class="col-md-12" id="articlesSelectorContainer" style="display: none;">
                        <div class="articles-selector-card">
                            <h5 class="articles-selector-title"><i class="bi bi-list-check"></i> Select Articles to Move</h5>
                            
                            <ul class="nav nav-pills articles-tabs" id="articlesTabs" role="tablist">
                                <!-- Dynamic Tab Pills -->
                            </ul>
                            
                            <div class="tab-content articles-tab-content" id="articlesTabContent">
                                <!-- Dynamic Tab Panes -->
                            </div>
                            
                            <div class="selected-articles-summary">
                                <span class="selected-count">Selected Items: <strong id="selectedItemsCount">0</strong></span>
                                <button type="button" class="btn-clear-articles" id="clearSelectedArticlesBtn">Clear All</button>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="articles" id="hiddenArticlesInput">

                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-chat-left-text"></i>
                                <textarea name="message" cols="30" rows="3" class="form-control" placeholder="Describe your relocation needs..." aria-label="Describe your relocation needs"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

<style>
.articles-selector-card {
    background: #ffffff;
    border: 1px solid #cbd5e1;
    border-radius: 8px;
    padding: 8px 10px;
    margin-bottom: 12px;
    transition: all 0.3s ease;
}
.articles-selector-title {
    font-family: 'Outfit', sans-serif;
    font-size: 12px;
    font-weight: 700;
    color: var(--accent-color);
    margin-bottom: 6px;
    display: flex;
    align-items: center;
    gap: 4px;
}
.articles-selector-title i {
    color: var(--secondary-color);
}
.articles-tabs {
    display: flex;
    flex-wrap: wrap;
    gap: 4px;
    margin-bottom: 6px;
    border-bottom: 1px solid #e2e8f0;
    padding-bottom: 4px;
}
.articles-tabs .nav-link {
    background: #f1f5f9 !important;
    color: var(--accent-color) !important;
    border: 1px solid #cbd5e1 !important;
    font-size: 10.5px !important;
    font-weight: 700 !important;
    padding: 3px 6px !important;
    border-radius: 4px !important;
    transition: all 0.2s ease !important;
}
.articles-tabs .nav-link:hover {
    border-color: var(--primary-color) !important;
    color: var(--primary-color) !important;
}
.articles-tabs .nav-link.active {
    background: var(--primary-color) !important;
    color: var(--white) !important;
    border-color: var(--primary-color) !important;
    box-shadow: 0 3px 8px rgba(var(--primary-rgb), 0.12) !important;
}
.articles-tab-content {
    max-height: 130px;
    overflow-y: auto;
    padding-right: 5px;
    scrollbar-width: thin;
}
.articles-tab-content::-webkit-scrollbar {
    width: 4px;
}
.articles-tab-content::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 2px;
}
.articles-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 6px;
}
.article-checkbox-label {
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 4px 6px;
    background: #f8fafc;
    border: 1px solid #cbd5e1;
    border-radius: 4px;
    font-size: 11px;
    font-weight: 600;
    color: var(--accent-color);
    cursor: pointer;
    transition: all 0.2s ease;
    user-select: none;
    text-align: left;
    line-height: 1.25;
}
.article-checkbox-label:hover {
    border-color: var(--primary-color);
    background: rgba(var(--primary-rgb), 0.01);
}
.article-checkbox-label input[type="checkbox"] {
    width: 12px;
    height: 12px;
    border-radius: 2px;
    border: 1px solid #cbd5e1;
    accent-color: var(--secondary-color);
    cursor: pointer;
    flex-shrink: 0;
}
.article-checkbox-label.checked {
    border-color: var(--secondary-color);
    background: rgba(var(--secondary-rgb), 0.02);
    color: var(--secondary-dark);
}
.selected-articles-summary {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-top: 1px solid #e2e8f0;
    padding-top: 6px;
    margin-top: 6px;
}
.selected-count {
    font-size: 11px;
    color: #64748b;
}
.selected-count strong {
    color: var(--secondary-color);
    font-size: 12px;
}
.btn-clear-articles {
    background: transparent;
    border: 1px solid #cbd5e1;
    color: #64748b;
    font-size: 10px;
    font-weight: 700;
    padding: 2px 6px;
    border-radius: 4px;
    cursor: pointer;
    transition: all 0.2s ease;
}
.btn-clear-articles:hover {
    background: #f1f5f9;
    color: var(--accent-color);
    border-color: #94a3b8;
}
body.modal-open .footer-action-bar {
    display: none !important;
}

@media (max-width: 575.98px) {
    .contact-custom-modal .modal-content {
        padding: 16px 14px;
        border-radius: 12px;
    }
    .contact-form-header {
        margin-bottom: 12px;
        padding-bottom: 8px;
    }
    .contact-form-header span {
        font-size: 18px;
    }
    .contact-custom-modal .form-group {
        margin-bottom: 10px;
    }
    .contact-custom-modal .form-icon {
        height: 38px;
        padding-left: 10px;
    }
    .contact-custom-modal .form-icon i {
        font-size: 14px;
        margin-right: 8px;
    }
    .contact-custom-modal .form-control {
        font-size: 12px;
        padding-right: 8px;
    }
    .contact-custom-modal textarea.form-control {
        min-height: 60px;
    }
    .articles-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 4px;
    }
    .articles-selector-card {
        padding: 6px;
        margin-bottom: 8px;
    }
    .article-checkbox-label {
        padding: 3px 4px;
        font-size: 10px;
        gap: 4px;
        border-radius: 3px;
    }
    .article-checkbox-label input[type="checkbox"] {
        width: 10px;
        height: 10px;
    }
    .articles-tabs .nav-link {
        font-size: 9.5px !important;
        padding: 2px 4px !important;
        border-radius: 3px !important;
    }
    .selected-articles-summary {
        padding-top: 4px;
        margin-top: 4px;
    }
    .contact-quote-gap {
        margin-top: 8px !important;
        gap: 8px;
    }
    .contact-quote-gap .theme-btn {
        padding: 8px 12px;
        font-size: 12px;
        border-radius: 20px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const serviceSelect = document.getElementById('modalServiceSelect');
    const articlesContainer = document.getElementById('articlesSelectorContainer');
    const articlesTabs = document.getElementById('articlesTabs');
    const articlesTabContent = document.getElementById('articlesTabContent');
    const hiddenInput = document.getElementById('hiddenArticlesInput');
    const countDisplay = document.getElementById('selectedItemsCount');
    const clearBtn = document.getElementById('clearSelectedArticlesBtn');

    const householdArticles = {
        "Drawing Room": [
            "Air Conditioner (A/C)",
            "Cooler",
            "Ceiling Fan",
            "Table Fan",
            "T.V",
            "Portable T.V",
            "Full Size T.V",
            "T.V Trolley",
            "Sofa 2+1",
            "Table",
            "Chairs",
            "Deewan",
            "Show Case",
            "Music System"
        ],
        "Centre Room": [
            "Carpets",
            "Writing Table",
            "Side Table",
            "Center Table",
            "Chairs",
            "Sofa 2+1",
            "Wall Frames",
            "Clocks",
            "Sewing Machine",
            "Computer"
        ],
        "Dining Room": [
            "Air Conditioner (A/C)",
            "Cooler",
            "Fan",
            "4 Seater Dining Table (4+1)",
            "6 Seater Dining Table (6+1)",
            "8 Seater Dining Table (8+1)",
            "Water Cooler",
            "Fridge (90 Ltr.)",
            "Fridge (165 Ltr.)",
            "Fridge (180 Ltr.)",
            "Fridge (289 Ltr.)",
            "Serving Trolley",
            "Show Case",
            "Wall Frames",
            "Chest of Drawer"
        ],
        "Bedroom": [
            "Double Bed",
            "Single Bed",
            "Mattress",
            "Wardrobe",
            "Almirah",
            "Dressing Table",
            "Bedside Table",
            "Air Conditioner",
            "Cooler",
            "Study Table",
            "Study Chair"
        ],
        "Kitchen": [
            "Microwave",
            "Oven",
            "Gas Stove",
            "Gas Cylinder",
            "Kitchen Chimney",
            "Kitchen Utensils (Cartons)",
            "Mixer",
            "Juicer",
            "Grinder",
            "Water Filter"
        ],
        "Other Items": [
            "Washing Machine",
            "Steel Almirah",
            "Wooden Almirah",
            "Suitcases / Luggage Boxes",
            "Bicycle",
            "Kids Toys",
            "Books Boxes",
            "Document Boxes"
        ]
    };

    const officeArticles = {
        "Workstations": [
            "Computers",
            "Laptops",
            "Office Desks",
            "Office Tables",
            "Ergonomic Office Chairs",
            "Workstation Dividers",
            "Desktop Telephones"
        ],
        "Storage & Filing": [
            "File Cabinets",
            "Cupboards",
            "Box Files & Document Boxes",
            "Bookshelves",
            "Racks",
            "Reception Desk",
            "Reception Sofa"
        ],
        "IT & Infrastructure": [
            "Server Rack",
            "Network Switches",
            "UPS & Power Backups",
            "Printers",
            "Scanners",
            "Copiers",
            "Projectors",
            "Screens",
            "Pantry Fridge",
            "Pantry Microwave"
        ]
    };

    const carArticles = {
        "Car Class": [
            "Hatchback Car",
            "Sedan Car",
            "SUV / MUV Car",
            "Luxury / Sports Car"
        ]
    };

    const bikeArticles = {
        "Bike Class": [
            "Commuter Bike (100cc - 150cc)",
            "Sports/Cruiser Bike (150cc - 350cc)",
            "Premium Superbike (350cc+)",
            "Scooter / Scooty",
            "Bicycle"
        ]
    };

    const storageArticles = {
        "Storage Profile": [
            "Household Goods (Complete Shifting)",
            "Office Furniture & IT Equipment",
            "Commercial Cargo / Stock",
            "Short-Term Storage (< 3 Months)",
            "Long-Term Storage (3+ Months)"
        ]
    };

    const internationalArticles = {
        "Shipment Profile": [
            "Full Container Load (FCL)",
            "Less than Container Load (LCL)",
            "Air Freight Cargo",
            "Sea Freight Cargo",
            "Export Custom Packing Required"
        ]
    };

    const insuranceArticles = {
        "Declaration Value": [
            "Goods Value < ₹1 Lakh",
            "Goods Value ₹1 - ₹5 Lakhs",
            "Goods Value ₹5 - ₹10 Lakhs",
            "Goods Value ₹10+ Lakhs"
        ],
        "Risk Coverage": [
            "Transit Cover Only",
            "Comprehensive Shifting Cover"
        ]
    };

    const heavyMachineryArticles = {
        "Equipment Profile": [
            "Industrial Machinery",
            "Factory Equipments",
            "CNC / Lathe Machine",
            "Heavy Generators",
            "Forklift / Crane Shifting",
            "Printing Press Machine"
        ]
    };

    const serviceArticles = {
        // Mapping all services used on the website (matching footer links / page names)
        "packing-and-moving": householdArticles,
        "loading-and-unloading": householdArticles,
        "residential-relocation": householdArticles,
        "home-relocation": householdArticles,
        "office-relocation": officeArticles,
        "car-transportation": carArticles,
        "bike-transportation": bikeArticles,
        "international-transportation": internationalArticles,
        "warehousing-and-storage": storageArticles,
        "transport-insurance": insuranceArticles,
        "heavy-machinery-and-shifting": heavyMachineryArticles,
        
        // Legacy keys (for robustness / backward compatibility)
        "packing_moving": householdArticles,
        "loading_unloading": householdArticles,
        "household": householdArticles,
        "office": officeArticles,
        "car": carArticles,
        "bike": bikeArticles,
        "storage": storageArticles,
        "international": internationalArticles,
        "insurance": insuranceArticles,
        "heavy_machinery": heavyMachineryArticles
    };

    function renderArticles(serviceKey) {
        articlesTabs.innerHTML = '';
        articlesTabContent.innerHTML = '';
        hiddenInput.value = '';
        countDisplay.textContent = '0';

        const categories = serviceArticles[serviceKey];
        if (!categories) {
            articlesContainer.style.display = 'none';
            return;
        }

        articlesContainer.style.display = 'block';
        let isFirst = true;

        for (const [catName, items] of Object.entries(categories)) {
            const tabId = 'tab-' + catName.toLowerCase().replace(/[^a-z0-9]/g, '-');
            
            // Render tab pill
            const li = document.createElement('li');
            li.className = 'nav-item';
            li.role = 'presentation';
            
            const btn = document.createElement('button');
            btn.className = 'nav-link' + (isFirst ? ' active' : '');
            btn.id = tabId + '-tab';
            btn.setAttribute('data-bs-toggle', 'pill');
            btn.setAttribute('data-bs-target', '#' + tabId);
            btn.type = 'button';
            btn.role = 'tab';
            btn.ariaControls = tabId;
            btn.ariaSelected = isFirst ? 'true' : 'false';
            btn.textContent = catName;
            
            li.appendChild(btn);
            articlesTabs.appendChild(li);

            // Render tab pane
            const pane = document.createElement('div');
            pane.className = 'tab-pane fade' + (isFirst ? ' show active' : '');
            pane.id = tabId;
            pane.role = 'tabpanel';
            pane.ariaLabelledby = tabId + '-tab';

            const grid = document.createElement('div');
            grid.className = 'articles-grid';

            items.forEach((item, index) => {
                const label = document.createElement('label');
                label.className = 'article-checkbox-label';
                
                const cb = document.createElement('input');
                cb.type = 'checkbox';
                cb.value = catName + ': ' + item;
                cb.addEventListener('change', function() {
                    if (this.checked) {
                        label.classList.add('checked');
                    } else {
                        label.classList.remove('checked');
                    }
                    updateSelectedArticles();
                });

                label.appendChild(cb);
                label.appendChild(document.createTextNode(' ' + item));
                grid.appendChild(label);
            });

            pane.appendChild(grid);
            articlesTabContent.appendChild(pane);

            isFirst = false;
        }
    }

    function updateSelectedArticles() {
        const checked = [];
        articlesTabContent.querySelectorAll('input[type="checkbox"]:checked').forEach(cb => {
            checked.push(cb.value);
        });
        
        countDisplay.textContent = checked.length;
        hiddenInput.value = checked.join(' | ');
    }

    serviceSelect.addEventListener('change', function() {
        renderArticles(this.value);
    });

    clearBtn.addEventListener('click', function() {
        articlesTabContent.querySelectorAll('input[type="checkbox"]:checked').forEach(cb => {
            cb.checked = false;
            cb.parentElement.classList.remove('checked');
        });
        updateSelectedArticles();
    });
});
</script>
                <div class="d-flex justify-content-center mt-2 contact-quote-gap">
                    <button id="submitbquotemodal" type="submit" class="theme-btn">Get My Free Quote <i class="bi bi-send-fill"></i></button>
                    <button onclick="document.getElementById('resultquotemodal').innerHTML = '';" type="reset" class="theme-btn">Clear Form</button>
                </div>
 
                <div id="resultquotemodal"></div>
            </form>
        </div>
    </div>
</div>