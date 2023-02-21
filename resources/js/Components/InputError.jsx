export default function InputError({ message, className = '' }) {
    return message ? <p className={'px-4 py-2 text-sm text-red-600 border-2 border-red-600 rounded-md ' + className}>{message}</p> : null;
}
