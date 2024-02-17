import os
from PIL import Image

def crop_images_in_directory(directory_path, output_directory=None):
    """
    Crop all images in the specified directory to remove transparent borders.

    Args:
    - directory_path: Path to the directory containing the images.
    - output_directory: Path to the directory where cropped images will be saved.
                       If None, images are overwritten.
    """
    # Create the output directory if it doesn't exist and if specified
    if output_directory and not os.path.exists(output_directory):
        os.makedirs(output_directory)
    
    for filename in os.listdir(directory_path):
        if filename.lower().endswith(('.png', '.gif', '.webp')):  # Add or remove file formats as needed
            image_path = os.path.join(directory_path, filename)
            image = Image.open(image_path)
            
            # Attempt to find the bounding box of the non-transparent part of the image
            bbox = image.getbbox()
            if bbox:
                cropped_image = image.crop(bbox)
                
                # Determine output path
                if output_directory:
                    output_path = os.path.join(output_directory, filename)
                else:
                    output_path = image_path
                
                # Save the cropped image
                cropped_image.save(output_path)
                print(f'Cropped and saved: {output_path}')
            else:
                print(f"No content to crop in {filename} or not a supported format.")

# Example usage
source_directory = "C:\\Users\\ameer\\OneDrive\\Documents\\GitHub\\private-uni-ecommerce\\backend\\public\\images\\pre"
output_directory = "C:\\Users\\ameer\\OneDrive\\Documents\\GitHub\\private-uni-ecommerce\\backend\\public\\images"  # Use None to overwrite original images
crop_images_in_directory(source_directory, output_directory)
