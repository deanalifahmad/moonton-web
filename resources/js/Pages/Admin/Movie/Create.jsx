import Authenticated from "@/Layouts/Authenticated/Index";
import InputError from '@/Components/InputError';
import TextInput from "@/Components/TextInput";
import InputLabel from "@/Components/InputLabel";
import Checkbox from "@/Components/Checkbox";
import Button from "@/Components/Button";
import { Head, useForm } from '@inertiajs/react';

export default function Create({ auth }) {
    const { setData, post, processing, errors } = useForm({
        name: '',
        category: '',
        video_url: '',
        thumbnail: '',
        rating: '',
        is_featured: false,
    });

    const onHandleChange = (event) => {
        setData(
            event.target.name,
            event.target.type === 'file'
            ? event.target.files[0]
            : event.target.value
        );
    };

    const submit = (e) => {
        e.preventDefault();

        post(route('admin.dashboard.movie.store'));
    };

    return (
        <Authenticated auth={auth}>
            <Head title="Admin - Create Movie" />
            <h1 className="text-xl mb-1">Insert a new Movie</h1>
            <hr className="mb-4"/>

            <form className="p-8" onSubmit={submit}>
                <InputLabel 
                    forInput="name"
                    value="Name"
                />
                <TextInput
                    type="text"
                    name="name"
                    variant="primary-outline"
                    handleChange={onHandleChange}
                    placeholder="Enter the name of the movie"
                    isError={errors.name}
                />
                <InputError message={errors.name} className="mt-2" />

                <InputLabel 
                    forInput="category"
                    value="Category"
                    className="mt-5"
                />
                <TextInput
                    type="text"
                    name="category"
                    variant="primary-outline"
                    handleChange={onHandleChange}
                    placeholder="Enter the category of the movie"
                    isError={errors.category}
                />
                <InputError message={errors.category} className="mt-2" />

                <InputLabel 
                    forInput="video_url"
                    value="Video URL"
                    className="mt-5"
                />
                <TextInput
                    type="url"
                    name="video_url"
                    variant="primary-outline"
                    handleChange={onHandleChange}
                    placeholder="Enter the video url of the movie"
                    isError={errors.video_url}
                />
                <InputError message={errors.video_url} className="mt-2" />

                <InputLabel 
                    forInput="thumbnail"
                    value="Thumbnail"
                    className="mt-5"
                />
                <TextInput
                    type="file"
                    name="thumbnail"
                    variant="primary-outline"
                    handleChange={onHandleChange}
                    placeholder="Insert thumbnail of the movie"
                    isError={errors.thumbnail}
                />
                <InputError message={errors.thumbnail} className="mt-2" />

                <InputLabel 
                    forInput="rating"
                    value="Rating"
                    className="mt-5"
                />
                <TextInput
                    type="number"
                    name="rating"
                    variant="primary-outline"
                    handleChange={onHandleChange}
                    placeholder="Enter the rating of the movie"
                    isError={errors.rating}
                />
                <InputError message={errors.rating} className="mt-2" />

                <div className="flex flex-row mt-4 items-center">
                    <InputLabel 
                        forInput="is_featured"
                        value="Is Featured"
                        className="mr-3 mt-1"
                    />
                    <Checkbox 
                        name="is_featured"
                        handleChange={(e) => setData('is_featured', e.target.checked)}
                    />
                </div>

                <Button
                    type="submit"
                    processing={processing}
                    className="mt-5"
                >
                    Save
                </Button>
            </form>
        </Authenticated>

    );
}