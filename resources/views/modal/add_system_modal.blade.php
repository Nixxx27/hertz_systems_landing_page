    <!-- Add/Edit System Modal (reused) -->
    <div class="modal fade" id="addSystemModal" tabindex="-1" aria-labelledby="addSystemModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #FFCC00;">
                    <h5 class="modal-title gradient-text" id="modalTitle">Add New System</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="system-form">
                    <input type="hidden" id="systemId"> 
                    <!-- Hidden field to store system ID for editing -->
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="appName" class="form-label">App Name</label>
                            <input type="text" class="form-control" id="appName" placeholder="Enter App Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="link" class="form-label">Link</label>
                            <input type="url" class="form-control" id="link" placeholder="https://example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" id="category" required>
                                <option class="form-dropdown" value="" disabled selected>Select Category</option>
                                <option class="form-dropdown" value="Internal">Internal Systems</option>
                                <option class="form-dropdown" value="Third-Party">Third-Party Systems</option>
                                <option class="form-dropdown" value="Website & API">Website Platforms & API</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" required>
                                <option class="form-dropdown" value="" disabled selected>Select Status</option>
                                <option class="form-dropdown" value="active">Active</option>
                                <option class="form-dropdown" value="maintenance">Maintenance</option>
                                <option class="form-dropdown" value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning" id="submitBtn">Add System</button>
                    </div>
                </form>
            </div>
        </div>
    </div>