import "../edit.scss";

export default function CustomLink({ href, children, is_outside, className }) {
  let target = "_blank";

  if (is_outside) {
    target = "_self";
  }

  return (
    <a
      className="custom-link"
      href={href}
      target={target}
      rel="noopener noreferrer"
    >
      {children}
    </a>
  );
}
